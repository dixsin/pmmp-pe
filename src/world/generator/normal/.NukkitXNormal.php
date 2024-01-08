<?php
namespace cn\nukkit\level\generator;

use cn\nukkit\block\Block;
use cn\nukkit\level\ChunkManager;
use cn\nukkit\level\format\FullChunk;
use cn\nukkit\level\generator\biome\Biome;
use cn\nukkit\level\generator\biome\BiomeSelector;
use cn\nukkit\level\generator\noise\Simplex;
use cn\nukkit\level\generator\object\ore\OreType;
use cn\nukkit\level\generator\populator\Populator;
use cn\nukkit\level\generator\populator\PopulatorCaves;
use cn\nukkit\level\generator\populator\PopulatorGroundCover;
use cn\nukkit\level\generator\populator\PopulatorOre;
use cn\nukkit\level\generator\populator\PopulatorRavines;
use cn\nukkit\math\NukkitRandom;
use cn\nukkit\math\Vector3;
use pocketmine\utils\Random;

class Normal extends Generator {

    public const JUNGLE = 21;
    public const SAVANNA = 35;
    public const ROOFED_FOREST = 29;
    public const ROOFED_FOREST_M = 157;
    public const MUSHROOM_ISLAND = 14;
    public const SWAMP = 6;
    public const OCEAN = 0;
    public const PLAINS = 1;
    public const DESERT = 2;
    public const FOREST = 4;
    public const TAIGA = 5;
    public const RIVER = 7;
    public const ICE_PLAINS = 12;
    public const BEACH = 16;
    public const BIRCH_FOREST = 27;
    public const MAX_BIOMES = 256;

    public function getId(): int {
        return self::TYPE_INFINITE;
    }

    private $populators = [];
    private $level;
    private $random;
    private $nukkitRandom;
    private $localSeed1;
    private $localSeed2;
    private $generationPopulators = [];
    private $noiseSeaFloor;
    private $noiseLand;
    private $noiseMountains;
    private $noiseBaseGround;
    private $noiseRiver;
    private $selector;
    private $heightOffset;
    private $seaHeight = 64;
    private $seaFloorHeight = 48;
    private $beathStartHeight = 60;
    private $beathStopHeight = 64;
    private $bedrockDepth = 5;
    private $seaFloorGenerateRange = 5;
    private $landHeightRange = 18;
    private $mountainHeight = 13;
    private $basegroundHeight = 3;
    private $waterColor = 16777215;

    protected $rainfall = 0.5;
    protected $temperature = 0.5;
    protected $grassColor = 0;

    public function __construct() {
        $this->populators = [];
        $this->generationPopulators = [];
    }

    public function getChunkManager(): ChunkManager {
        return $this->level;
    }

    public function getName(): string {
        return "normal";
    }

    public function getSettings(): array {
        return [];
    }

    public function pickBiome(int $x, int $z): Biome {
        $hash = $x * 2345803 ^ $z * 9236449 ^ $this->level->getSeed();
        $hash *= $hash + 223;
        $xNoise = $hash >> 20 & 3;
        $zNoise = $hash >> 22 & 3;
        if ($xNoise == 3) {
            $xNoise = 1;
        }
        if ($zNoise == 3) {
            $zNoise = 1;
        }
        return $this->selector->pickBiome($x + $xNoise - 1, $z + $zNoise - 1);
    }

    public function init(ChunkManager $level, NukkitRandom $random): void {
        $this->level = $level;
        $this->nukkitRandom = $random;
        $this->random = new Random();
        $this->nukkitRandom->setSeed($this->level->getSeed());
        $this->localSeed1 = $this->random->nextLong();
        $this->localSeed2 = $this->random->nextLong();
        $this->noiseSeaFloor = new Simplex($this->nukkitRandom, 1, 1 / 8, 1 / 64);
        $this->noiseLand = new Simplex($this->nukkitRandom, 2, 1 / 8, 1 / 512);
        $this->noiseMountains = new Simplex($this->nukkitRandom, 4, 1, 1 / 500);
        $this->noiseBaseGround = new Simplex($this->nukkitRandom, 4, 1 / 4, 1 / 64);
        $this->noiseRiver = new Simplex($this->nukkitRandom, 2, 1, 1 / 512);
        $this->nukkitRandom->setSeed($this->level->getSeed());
        $this->selector = new BiomeSelector($this->nukkitRandom, Biome::getBiome(Biome::FOREST));
        $this->heightOffset = $random->nextRange(-5, 3);
        $this->selector->addBiome(Biome::getBiome(self::OCEAN));
        $this->selector->addBiome(Biome::getBiome(self::PLAINS));
        $this->selector->addBiome(Biome::getBiome(self::DESERT));
        $this->selector->addBiome(Biome::getBiome(self::FOREST));
        $this->selector->addBiome(Biome::getBiome(self::TAIGA));
        $this->selector->addBiome(Biome::getBiome(self::RIVER));
        $this->selector->addBiome(Biome::getBiome(self::ICE_PLAINS));
        $this->selector->addBiome(Biome::getBiome(self::BIRCH_FOREST));
        $this->selector->addBiome(Biome::getBiome(self::JUNGLE));
        $this->selector->addBiome(Biome::getBiome(self::SAVANNA));
        $this->selector->addBiome(Biome::getBiome(self::ROOFED_FOREST));
        $this->selector->addBiome(Biome::getBiome(self::ROOFED_FOREST_M));
        $this->selector->addBiome(Biome::getBiome(self::MUSHROOM_ISLAND));
        $this->selector->addBiome(Biome::getBiome(self::SWAMP));
        $this->selector->recalculate();
        $caves = new PopulatorCaves();
        $this->populators[] = $caves;
        $ravines = new PopulatorRavines();
        $this->populators[] = $ravines;
        $cover = new PopulatorGroundCover();
        $this->generationPopulators[] = $cover;
        $ores = new PopulatorOre();
        $ores->setOreTypes([
            new OreType(new BlockOreCoal(), 20, 17, 0, 128),
            new OreType(new BlockOreIron(), 20, 9, 0, 64),
            new OreType(new BlockOreRedstone(), 8, 8, 0, 16),
            new OreType(new BlockOreLapis(), 1, 7, 0, 16),
            new OreType(new BlockOreGold(), 2, 9, 0, 32),
            new OreType(new BlockOreDiamond(), 1, 8, 0, 16),
            new OreType(new BlockDirt(), 10, 33, 0, 128),
            new OreType(new BlockGravel(), 8, 33, 0, 128),
            new OreType(new BlockStone(BlockStone::GRANITE), 10, 33, 0, 80),
            new OreType(new BlockStone(BlockStone::DIORITE), 10, 33, 0, 80),
            new OreType(new BlockStone(BlockStone::ANDESITE), 10, 33, 0, 80)
        ]);
        $this->populators[] = $ores;
    }

    public function generateChunk(int $chunkX, int $chunkZ): void {
        $this->nukkitRandom->setSeed($chunkX * $this->localSeed1 ^ $chunkZ * $this->localSeed2 ^ $this->level->getSeed());
        $seaFloorNoise = Generator::getFastNoise2D($this->noiseSeaFloor, 16, 16, 4, $chunkX * 16, 0, $chunkZ * 16);
        $landNoise = Generator::getFastNoise2D($this->noiseLand, 16, 16, 4, $chunkX * 16, 0, $chunkZ * 16);
        $mountainNoise = Generator::getFastNoise2D($this->noiseMountains, 16, 16, 4, $chunkX * 16, 0, $chunkZ * 16);
        $baseNoise = Generator::getFastNoise2D($this->noiseBaseGround, 16, 16, 4, $chunkX * 16, 0, $chunkZ * 16);
        $riverNoise = Generator::getFastNoise2D($this->noiseRiver, 16, 16, 4, $chunkX * 16, 0, $chunkZ * 16);
        $chunk = $this->level->getChunk($chunkX, $chunkZ);
        for ($genx = 0; $genx < 16; $genx++) {
            for ($genz = 0; $genz < 16; $genz++) {
                $biome;
                $canBaseGround = false;
                $canRiver = true;

                $landHeightNoise = $landNoise[$genx][$genz] + 1;
                $landHeightNoise *= 2.956;
                $landHeightNoise = $landHeightNoise * $landHeightNoise;
                $landHeightNoise = $landHeightNoise - 0.6;
                $landHeightNoise = $landHeightNoise > 0 ? $landHeightNoise : 0;

                $mountainHeightGenerate = $mountainNoise[$genx][$genz] - 0.2;
                $mountainHeightGenerate = $mountainHeightGenerate > 0 ? $mountainHeightGenerate : 0;
                $mountainGenerate = (int) ($this->mountainHeight * $mountainHeightGenerate);
                $landHeightGenerate = (int) ($this->landHeightRange * $landHeightNoise);
                if ($landHeightGenerate > $this->landHeightRange) {
                    if ($landHeightGenerate > $this->landHeightRange) {
                        $canBaseGround = true;
                    }
                    $landHeightGenerate = $this->landHeightRange;
                }
                $genyHeight = $this->seaFloorHeight + $landHeightGenerate;
                $genyHeight += $mountainGenerate;

                if ($genyHeight < $this->beathStartHeight) {
                    if ($genyHeight < $this->beathStartHeight - 5) {
                        $genyHeight += (int) ($this->seaFloorGenerateRange * $seaFloorNoise[$genx][$genz]);
                    }
                    $biome = Biome::getBiome(Biome::OCEAN);
                    if ($genyHeight < $this->seaFloorHeight - $this->seaFloorGenerateRange) {
                        $genyHeight = $this->seaFloorHeight;
                    }
                    $canRiver = false;
                } else if ($genyHeight <= $this->beathStopHeight && $genyHeight >= $this->beathStartHeight) {
                    $biome = Biome::getBiome(Biome::BEACH);
                } else {
                    $biome = $this->pickBiome($chunkX * 16 + $genx, $chunkZ * 16 + $genz);
                    if ($canBaseGround) {
                        $baseGroundHeight = (int) ($this->landHeightRange * $landHeightNoise) - $this->landHeightRange;
                        $baseGroundHeight2 = (int) ($this->basegroundHeight * ($baseNoise[$genx][$genz] + 1));
                        if ($baseGroundHeight2 > $baseGroundHeight) $baseGroundHeight2 = $baseGroundHeight;
                        if ($baseGroundHeight2 > $mountainGenerate)
                            $baseGroundHeight2 = $baseGroundHeight2 - $mountainGenerate;
                        else $baseGroundHeight2 = 0;
                        $genyHeight += $baseGroundHeight2;
                    }
                }
                if ($canRiver && $genyHeight <= $this->seaHeight - 5) {
                    $canRiver = false;
                }

                if ($canRiver) {
                    $riverGenerate = $riverNoise[$genx][$genz];
                    if ($riverGenerate > -0.25 && $riverGenerate < 0.25) {
                        $riverGenerate = $riverGenerate > 0 ? $riverGenerate : -$riverGenerate;
                        $riverGenerate = 0.25 - $riverGenerate;

                        $riverGenerate = $riverGenerate * $riverGenerate * 4;

                        $riverGenerate = $riverGenerate - 0.0000001;
                        $riverGenerate = $riverGenerate > 0 ? $riverGenerate : 0;
                        $genyHeight -= $riverGenerate * 64;
                        if ($genyHeight < $this->seaHeight) {
                            $biome = Biome::getBiome(Biome::RIVER);

                            if ($genyHeight <= $this->seaHeight - 8) {
                                $genyHeight1 = $this->seaHeight - 9 + (int) ($this->basegroundHeight * ($baseNoise[$genx][$genz] + 1));
                                $genyHeight2 = $genyHeight < $this->seaHeight - 7 ? $this->seaHeight - 7 : $genyHeight;
                                $genyHeight = $genyHeight1 > $genyHeight2 ? $genyHeight1 : $genyHeight2;
                            }
                        }
                    }
                }
                $chunk->setBiomeId($genx, $genz, $biome->getId());

                $biomecolor = $biome->getColor();
                $chunk->setBiomeColor($genx, $genz, ($biomecolor >> 16), ($biomecolor >> 8) & 0xff, ($biomecolor & 0xff));

                $generateHeight = $genyHeight > $this->seaHeight ? $genyHeight : $this->seaHeight;
                for ($geny = 0; $geny <= $generateHeight; $geny++) {
                    if ($geny <= $this->bedrockDepth && ($geny == 0 || $nukkitRandom->nextRange(1, 5) == 1)) {
                        $chunk->setBlock($genx, $geny, $genz, Block::BEDROCK);
                    } else if ($geny > $genyHeight) {
                        if (($biome->getId() == Biome::ICE_PLAINS || $biome->getId() == Biome::TAIGA) && $geny == $this->seaHeight) {
                            $chunk->setBlock($genx, $geny, $genz, Block::ICE);
                        } else {
                            $chunk->setBlock($genx, $geny, $genz, Block::STILL_WATER);
                        }
                    } else {
                        $chunk->setBlock($genx, $geny, $genz, Block::STONE);
                    }
                }
            }
        }

        foreach ($this->generationPopulators as $populator) {
            $populator->populate($this->level, $chunkX, $chunkZ, $this->nukkitRandom);
        }
    }

    public function populateChunk(int $chunkX, int $chunkZ): void {
        $this->nukkitRandom->setSeed(0xdeadbeef ^ ($chunkX << 8) ^ $chunkZ ^ $this->level->getSeed());
        foreach ($this->populators as $populator) {
            $populator->populate($this->level, $chunkX, $chunkZ, $this->nukkitRandom);
        }
        $chunk = $this->level->getChunk($chunkX, $chunkZ);
        $biome = Biome::getBiome($chunk->getBiomeId(7, 7));
        $biome->populateChunk($this->level, $chunkX, $chunkZ, $this->nukkitRandom);
    }

    public function getSpawn(): Vector3 {
        return new Vector3(127.5, 256, 127.5);
    }
}


