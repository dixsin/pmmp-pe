<?php

/*
 * This file is part of BedrockProtocol.
 * Copyright (C) 2014-2022 PocketMine Team <https://github.com/pmmp/BedrockProtocol>
 *
 * BedrockProtocol is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol\types;

/**
 * This file is generated from level_sound_id_map.json in BedrockData.
 *
 * This file is automatically generated; do NOT edit it by hand.
 */
final class LevelSoundEvent{
	private function __construct(){
		//NOOP
	}

	public const ITEM_USE_ON = 0;
	public const HIT = 1;
	public const STEP = 2;
	public const FLY = 3;
	public const JUMP = 4;
	public const BREAK = 5;
	public const PLACE = 6;
	public const HEAVY_STEP = 7;
	public const GALLOP = 8;
	public const FALL = 9;
	public const AMBIENT = 10;
	public const AMBIENT_BABY = 11;
	public const AMBIENT_IN_WATER = 12;
	public const BREATHE = 13;
	public const DEATH = 14;
	public const DEATH_IN_WATER = 15;
	public const DEATH_TO_ZOMBIE = 16;
	public const HURT = 17;
	public const HURT_IN_WATER = 18;
	public const MAD = 19;
	public const BOOST = 20;
	public const BOW = 21;
	public const SQUISH_BIG = 22;
	public const SQUISH_SMALL = 23;
	public const FALL_BIG = 24;
	public const FALL_SMALL = 25;
	public const SPLASH = 26;
	public const FIZZ = 27;
	public const FLAP = 28;
	public const SWIM = 29;
	public const DRINK = 30;
	public const EAT = 31;
	public const TAKEOFF = 32;
	public const SHAKE = 33;
	public const PLOP = 34;
	public const LAND = 35;
	public const SADDLE = 36;
	public const ARMOR = 37;
	public const MOB_ARMOR_STAND_PLACE = 38;
	public const ADD_CHEST = 39;
	public const THROW = 40;
	public const ATTACK = 41;
	public const ATTACK_NODAMAGE = 42;
	public const ATTACK_STRONG = 43;
	public const WARN = 44;
	public const SHEAR = 45;
	public const MILK = 46;
	public const THUNDER = 47;
	public const EXPLODE = 48;
	public const FIRE = 49;
	public const IGNITE = 50;
	public const FUSE = 51;
	public const STARE = 52;
	public const SPAWN = 53;
	public const SHOOT = 54;
	public const BREAK_BLOCK = 55;
	public const LAUNCH = 56;
	public const BLAST = 57;
	public const LARGE_BLAST = 58;
	public const TWINKLE = 59;
	public const REMEDY = 60;
	public const UNFECT = 61;
	public const LEVELUP = 62;
	public const BOW_HIT = 63;
	public const BULLET_HIT = 64;
	public const EXTINGUISH_FIRE = 65;
	public const ITEM_FIZZ = 66;
	public const CHEST_OPEN = 67;
	public const CHEST_CLOSED = 68;
	public const SHULKERBOX_OPEN = 69;
	public const SHULKERBOX_CLOSED = 70;
	public const ENDERCHEST_OPEN = 71;
	public const ENDERCHEST_CLOSED = 72;
	public const POWER_ON = 73;
	public const POWER_OFF = 74;
	public const ATTACH = 75;
	public const DETACH = 76;
	public const DENY = 77;
	public const TRIPOD = 78;
	public const POP = 79;
	public const DROP_SLOT = 80;
	public const NOTE = 81;
	public const THORNS = 82;
	public const PISTON_IN = 83;
	public const PISTON_OUT = 84;
	public const PORTAL = 85;
	public const WATER = 86;
	public const LAVA_POP = 87;
	public const LAVA = 88;
	public const BURP = 89;
	public const BUCKET_FILL_WATER = 90;
	public const BUCKET_FILL_LAVA = 91;
	public const BUCKET_EMPTY_WATER = 92;
	public const BUCKET_EMPTY_LAVA = 93;
	public const ARMOR_EQUIP_CHAIN = 94;
	public const ARMOR_EQUIP_DIAMOND = 95;
	public const ARMOR_EQUIP_GENERIC = 96;
	public const ARMOR_EQUIP_GOLD = 97;
	public const ARMOR_EQUIP_IRON = 98;
	public const ARMOR_EQUIP_LEATHER = 99;
	public const ARMOR_EQUIP_ELYTRA = 100;
	public const RECORD_13 = 101;
	public const RECORD_CAT = 102;
	public const RECORD_BLOCKS = 103;
	public const RECORD_CHIRP = 104;
	public const RECORD_FAR = 105;
	public const RECORD_MALL = 106;
	public const RECORD_MELLOHI = 107;
	public const RECORD_STAL = 108;
	public const RECORD_STRAD = 109;
	public const RECORD_WARD = 110;
	public const RECORD_11 = 111;
	public const RECORD_WAIT = 112;
	public const STOP_RECORD = 113;
	public const FLOP = 114;
	public const ELDERGUARDIAN_CURSE = 115;
	public const MOB_WARNING = 116;
	public const MOB_WARNING_BABY = 117;
	public const TELEPORT = 118;
	public const SHULKER_OPEN = 119;
	public const SHULKER_CLOSE = 120;
	public const HAGGLE = 121;
	public const HAGGLE_YES = 122;
	public const HAGGLE_NO = 123;
	public const HAGGLE_IDLE = 124;
	public const CHORUSGROW = 125;
	public const CHORUSDEATH = 126;
	public const GLASS = 127;
	public const POTION_BREWED = 128;
	public const CAST_SPELL = 129;
	public const PREPARE_ATTACK = 130;
	public const PREPARE_SUMMON = 131;
	public const PREPARE_WOLOLO = 132;
	public const FANG = 133;
	public const CHARGE = 134;
	public const CAMERA_TAKE_PICTURE = 135;
	public const LEASHKNOT_PLACE = 136;
	public const LEASHKNOT_BREAK = 137;
	public const GROWL = 138;
	public const WHINE = 139;
	public const PANT = 140;
	public const PURR = 141;
	public const PURREOW = 142;
	public const DEATH_MIN_VOLUME = 143;
	public const DEATH_MID_VOLUME = 144;
	public const IMITATE_BLAZE = 145;
	public const IMITATE_CAVE_SPIDER = 146;
	public const IMITATE_CREEPER = 147;
	public const IMITATE_ELDER_GUARDIAN = 148;
	public const IMITATE_ENDER_DRAGON = 149;
	public const IMITATE_ENDERMAN = 150;
	public const IMITATE_ENDERMITE = 151;
	public const IMITATE_EVOCATION_ILLAGER = 152;
	public const IMITATE_GHAST = 153;
	public const IMITATE_HUSK = 154;
	public const IMITATE_ILLUSION_ILLAGER = 155;
	public const IMITATE_MAGMA_CUBE = 156;
	public const IMITATE_POLAR_BEAR = 157;
	public const IMITATE_SHULKER = 158;
	public const IMITATE_SILVERFISH = 159;
	public const IMITATE_SKELETON = 160;
	public const IMITATE_SLIME = 161;
	public const IMITATE_SPIDER = 162;
	public const IMITATE_STRAY = 163;
	public const IMITATE_VEX = 164;
	public const IMITATE_VINDICATION_ILLAGER = 165;
	public const IMITATE_WITCH = 166;
	public const IMITATE_WITHER = 167;
	public const IMITATE_WITHER_SKELETON = 168;
	public const IMITATE_WOLF = 169;
	public const IMITATE_ZOMBIE = 170;
	public const IMITATE_ZOMBIE_PIGMAN = 171;
	public const IMITATE_ZOMBIE_VILLAGER = 172;
	public const BLOCK_END_PORTAL_FRAME_FILL = 173;
	public const BLOCK_END_PORTAL_SPAWN = 174;
	public const RANDOM_ANVIL_USE = 175;
	public const BOTTLE_DRAGONBREATH = 176;
	public const PORTAL_TRAVEL = 177;
	public const ITEM_TRIDENT_HIT = 178;
	public const ITEM_TRIDENT_RETURN = 179;
	public const ITEM_TRIDENT_RIPTIDE_1 = 180;
	public const ITEM_TRIDENT_RIPTIDE_2 = 181;
	public const ITEM_TRIDENT_RIPTIDE_3 = 182;
	public const ITEM_TRIDENT_THROW = 183;
	public const ITEM_TRIDENT_THUNDER = 184;
	public const ITEM_TRIDENT_HIT_GROUND = 185;
	public const DEFAULT = 186;
	public const BLOCK_FLETCHING_TABLE_USE = 187;
	public const ELEMCONSTRUCT_OPEN = 188;
	public const ICEBOMB_HIT = 189;
	public const BALLOONPOP = 190;
	public const LT_REACTION_ICEBOMB = 191;
	public const LT_REACTION_BLEACH = 192;
	public const LT_REACTION_EPASTE = 193;
	public const LT_REACTION_EPASTE2 = 194;
	public const LT_REACTION_GLOW_STICK = 195;
	public const LT_REACTION_GLOW_STICK_2 = 196;
	public const LT_REACTION_LUMINOL = 197;
	public const LT_REACTION_SALT = 198;
	public const LT_REACTION_FERTILIZER = 199;
	public const LT_REACTION_FIREBALL = 200;
	public const LT_REACTION_MGSALT = 201;
	public const LT_REACTION_MISCFIRE = 202;
	public const LT_REACTION_FIRE = 203;
	public const LT_REACTION_MISCEXPLOSION = 204;
	public const LT_REACTION_MISCMYSTICAL = 205;
	public const LT_REACTION_MISCMYSTICAL2 = 206;
	public const LT_REACTION_PRODUCT = 207;
	public const SPARKLER_USE = 208;
	public const GLOWSTICK_USE = 209;
	public const SPARKLER_ACTIVE = 210;
	public const CONVERT_TO_DROWNED = 211;
	public const BUCKET_FILL_FISH = 212;
	public const BUCKET_EMPTY_FISH = 213;
	public const BUBBLE_UP = 214;
	public const BUBBLE_DOWN = 215;
	public const BUBBLE_POP = 216;
	public const BUBBLE_UPINSIDE = 217;
	public const BUBBLE_DOWNINSIDE = 218;
	public const HURT_BABY = 219;
	public const DEATH_BABY = 220;
	public const STEP_BABY = 221;
	public const SPAWN_BABY = 222;
	public const BORN = 223;
	public const BLOCK_TURTLE_EGG_BREAK = 224;
	public const BLOCK_TURTLE_EGG_CRACK = 225;
	public const BLOCK_TURTLE_EGG_HATCH = 226;
	public const LAY_EGG = 227;
	public const BLOCK_TURTLE_EGG_ATTACK = 228;
	public const BEACON_ACTIVATE = 229;
	public const BEACON_AMBIENT = 230;
	public const BEACON_DEACTIVATE = 231;
	public const BEACON_POWER = 232;
	public const CONDUIT_ACTIVATE = 233;
	public const CONDUIT_AMBIENT = 234;
	public const CONDUIT_ATTACK = 235;
	public const CONDUIT_DEACTIVATE = 236;
	public const CONDUIT_SHORT = 237;
	public const SWOOP = 238;
	public const BLOCK_BAMBOO_SAPLING_PLACE = 239;
	public const PRESNEEZE = 240;
	public const SNEEZE = 241;
	public const AMBIENT_TAME = 242;
	public const SCARED = 243;
	public const BLOCK_SCAFFOLDING_CLIMB = 244;
	public const CROSSBOW_LOADING_START = 245;
	public const CROSSBOW_LOADING_MIDDLE = 246;
	public const CROSSBOW_LOADING_END = 247;
	public const CROSSBOW_SHOOT = 248;
	public const CROSSBOW_QUICK_CHARGE_START = 249;
	public const CROSSBOW_QUICK_CHARGE_MIDDLE = 250;
	public const CROSSBOW_QUICK_CHARGE_END = 251;
	public const AMBIENT_AGGRESSIVE = 252;
	public const AMBIENT_WORRIED = 253;
	public const CANT_BREED = 254;
	public const ITEM_SHIELD_BLOCK = 255;
	public const ITEM_BOOK_PUT = 256;
	public const BLOCK_GRINDSTONE_USE = 257;
	public const BLOCK_BELL_HIT = 258;
	public const BLOCK_CAMPFIRE_CRACKLE = 259;
	public const ROAR = 260;
	public const STUN = 261;
	public const BLOCK_SWEET_BERRY_BUSH_HURT = 262;
	public const BLOCK_SWEET_BERRY_BUSH_PICK = 263;
	public const BLOCK_CARTOGRAPHY_TABLE_USE = 264;
	public const BLOCK_STONECUTTER_USE = 265;
	public const BLOCK_COMPOSTER_EMPTY = 266;
	public const BLOCK_COMPOSTER_FILL = 267;
	public const BLOCK_COMPOSTER_FILL_SUCCESS = 268;
	public const BLOCK_COMPOSTER_READY = 269;
	public const BLOCK_BARREL_OPEN = 270;
	public const BLOCK_BARREL_CLOSE = 271;
	public const RAID_HORN = 272;
	public const BLOCK_LOOM_USE = 273;
	public const AMBIENT_IN_RAID = 274;
	public const UI_CARTOGRAPHY_TABLE_TAKE_RESULT = 275;
	public const UI_STONECUTTER_TAKE_RESULT = 276;
	public const UI_LOOM_TAKE_RESULT = 277;
	public const BLOCK_SMOKER_SMOKE = 278;
	public const BLOCK_BLASTFURNACE_FIRE_CRACKLE = 279;
	public const BLOCK_SMITHING_TABLE_USE = 280;
	public const SCREECH = 281;
	public const SLEEP = 282;
	public const BLOCK_FURNACE_LIT = 283;
	public const CONVERT_MOOSHROOM = 284;
	public const MILK_SUSPICIOUSLY = 285;
	public const CELEBRATE = 286;
	public const JUMP_PREVENT = 287;
	public const AMBIENT_POLLINATE = 288;
	public const BLOCK_BEEHIVE_DRIP = 289;
	public const BLOCK_BEEHIVE_ENTER = 290;
	public const BLOCK_BEEHIVE_EXIT = 291;
	public const BLOCK_BEEHIVE_WORK = 292;
	public const BLOCK_BEEHIVE_SHEAR = 293;
	public const DRINK_HONEY = 294;
	public const AMBIENT_CAVE = 295;
	public const RETREAT = 296;
	public const CONVERTED_TO_ZOMBIFIED = 297;
	public const ADMIRE = 298;
	public const STEP_LAVA = 299;
	public const TEMPT = 300;
	public const PANIC = 301;
	public const ANGRY = 302;
	public const AMBIENT_WARPED_FOREST_MOOD = 303;
	public const AMBIENT_SOULSAND_VALLEY_MOOD = 304;
	public const AMBIENT_NETHER_WASTES_MOOD = 305;
	public const RESPAWN_ANCHOR_BASALT_DELTAS_MOOD = 306;
	public const AMBIENT_CRIMSON_FOREST_MOOD = 307;
	public const RESPAWN_ANCHOR_CHARGE = 308;
	public const RESPAWN_ANCHOR_DEPLETE = 309;
	public const RESPAWN_ANCHOR_SET_SPAWN = 310;
	public const RESPAWN_ANCHOR_AMBIENT = 311;
	public const PARTICLE_SOUL_ESCAPE_QUIET = 312;
	public const PARTICLE_SOUL_ESCAPE_LOUD = 313;
	public const RECORD_PIGSTEP = 314;
	public const LODESTONE_COMPASS_LINK_COMPASS_TO_LODESTONE = 315;
	public const SMITHING_TABLE_USE = 316;
	public const ARMOR_EQUIP_NETHERITE = 317;
	public const AMBIENT_WARPED_FOREST_LOOP = 318;
	public const AMBIENT_SOULSAND_VALLEY_LOOP = 319;
	public const AMBIENT_NETHER_WASTES_LOOP = 320;
	public const AMBIENT_BASALT_DELTAS_LOOP = 321;
	public const AMBIENT_CRIMSON_FOREST_LOOP = 322;
	public const AMBIENT_WARPED_FOREST_ADDITIONS = 323;
	public const AMBIENT_SOULSAND_VALLEY_ADDITIONS = 324;
	public const AMBIENT_NETHER_WASTES_ADDITIONS = 325;
	public const AMBIENT_BASALT_DELTAS_ADDITIONS = 326;
	public const AMBIENT_CRIMSON_FOREST_ADDITIONS = 327;
	public const POWER_ON_SCULK_SENSOR = 328;
	public const POWER_OFF_SCULK_SENSOR = 329;
	public const BUCKET_FILL_POWDER_SNOW = 330;
	public const BUCKET_EMPTY_POWDER_SNOW = 331;
	public const CAULDRON_DRIP_WATER_POINTED_DRIPSTONE = 332;
	public const CAULDRON_DRIP_LAVA_POINTED_DRIPSTONE = 333;
	public const DRIP_WATER_POINTED_DRIPSTONE = 334;
	public const DRIP_LAVA_POINTED_DRIPSTONE = 335;
	public const PICK_BERRIES_CAVE_VINES = 336;
	public const TILT_DOWN_BIG_DRIPLEAF = 337;
	public const TILT_UP_BIG_DRIPLEAF = 338;
	public const COPPER_WAX_ON = 339;
	public const COPPER_WAX_OFF = 340;
	public const SCRAPE = 341;
	public const MOB_PLAYER_HURT_DROWN = 342;
	public const MOB_PLAYER_HURT_ON_FIRE = 343;
	public const MOB_PLAYER_HURT_FREEZE = 344;
	public const ITEM_SPYGLASS_USE = 345;
	public const ITEM_SPYGLASS_STOP_USING = 346;
	public const CHIME_AMETHYST_BLOCK = 347;
	public const AMBIENT_SCREAMER = 348;
	public const HURT_SCREAMER = 349;
	public const DEATH_SCREAMER = 350;
	public const MILK_SCREAMER = 351;
	public const JUMP_TO_BLOCK = 352;
	public const PRE_RAM = 353;
	public const PRE_RAM_SCREAMER = 354;
	public const RAM_IMPACT = 355;
	public const RAM_IMPACT_SCREAMER = 356;
	public const SQUID_INK_SQUIRT = 357;
	public const GLOW_SQUID_INK_SQUIRT = 358;
	public const CONVERT_TO_STRAY = 359;
	public const CAKE_ADD_CANDLE = 360;
	public const EXTINGUISH_CANDLE = 361;
	public const AMBIENT_CANDLE = 362;
	public const BLOCK_CLICK = 363;
	public const BLOCK_CLICK_FAIL = 364;
	public const BLOCK_SCULK_CATALYST_BLOOM = 365;
	public const BLOCK_SCULK_SHRIEKER_SHRIEK = 366;
	public const NEARBY_CLOSE = 367;
	public const NEARBY_CLOSER = 368;
	public const NEARBY_CLOSEST = 369;
	public const AGITATED = 370;
	public const RECORD_OTHERSIDE = 371;
	public const TONGUE = 372;
	public const IRONGOLEM_CRACK = 373;
	public const IRONGOLEM_REPAIR = 374;
	public const LISTENING = 375;
	public const HEARTBEAT = 376;
	public const HORN_BREAK = 377;

	public const BLOCK_SCULK_SPREAD = 379;
	public const CHARGE_SCULK = 380;
	public const BLOCK_SCULK_SENSOR_PLACE = 381;
	public const BLOCK_SCULK_SHRIEKER_PLACE = 382;
	public const HORN_CALL0 = 383;
	public const HORN_CALL1 = 384;
	public const HORN_CALL2 = 385;
	public const HORN_CALL3 = 386;
	public const HORN_CALL4 = 387;
	public const HORN_CALL5 = 388;
	public const HORN_CALL6 = 389;
	public const HORN_CALL7 = 390;

	public const IMITATE_WARDEN = 426;
	public const LISTENING_ANGRY = 427;
	public const ITEM_GIVEN = 428;
	public const ITEM_TAKEN = 429;
	public const DISAPPEARED = 430;
	public const REAPPEARED = 431;
	public const DRINK_MILK = 432;
	public const BLOCK_FROG_SPAWN_HATCH = 433;
	public const LAY_SPAWN = 434;
	public const BLOCK_FROG_SPAWN_BREAK = 435;
	public const SONIC_BOOM = 436;
	public const SONIC_CHARGE = 437;
	public const ITEM_THROWN = 438;
	public const RECORD_5 = 439;
	public const CONVERT_TO_FROG = 440;

	public const BLOCK_ENCHANTING_TABLE_USE = 442;
	public const STEP_SAND = 443;
	public const DASH_READY = 444;
	public const BUNDLE_DROP_CONTENTS = 445;
	public const BUNDLE_INSERT = 446;
	public const BUNDLE_REMOVE_ONE = 447;
	public const PRESSURE_PLATE_CLICK_OFF = 448;
	public const PRESSURE_PLATE_CLICK_ON = 449;
	public const BUTTON_CLICK_OFF = 450;
	public const BUTTON_CLICK_ON = 451;
	public const DOOR_OPEN = 452;
	public const DOOR_CLOSE = 453;
	public const TRAPDOOR_OPEN = 454;
	public const TRAPDOOR_CLOSE = 455;
	public const FENCE_GATE_OPEN = 456;
	public const FENCE_GATE_CLOSE = 457;
	public const INSERT = 458;
	public const PICKUP = 459;
	public const INSERT_ENCHANTED = 460;
	public const PICKUP_ENCHANTED = 461;
	public const BRUSH = 462;
	public const BRUSH_COMPLETED = 463;
	public const SHATTER_POT = 464;
	public const BREAK_POT = 465;
	public const BLOCK_SNIFFER_EGG_CRACK = 466;
	public const BLOCK_SNIFFER_EGG_HATCH = 467;
	public const BLOCK_SIGN_WAXED_INTERACT_FAIL = 468;
	public const RECORD_RELIC = 469;

	//The following aliases are kept for backwards compatibility only
	public const SCULK_SENSOR_POWER_ON = self::POWER_ON_SCULK_SENSOR;
	public const SCULK_SENSOR_POWER_OFF = self::POWER_OFF_SCULK_SENSOR;
	public const POINTED_DRIPSTONE_CAULDRON_DRIP_WATER = self::CAULDRON_DRIP_WATER_POINTED_DRIPSTONE;
	public const POINTED_DRIPSTONE_CAULDRON_DRIP_LAVA = self::CAULDRON_DRIP_LAVA_POINTED_DRIPSTONE;
	public const POINTED_DRIPSTONE_DRIP_WATER = self::DRIP_WATER_POINTED_DRIPSTONE;
	public const POINTED_DRIPSTONE_DRIP_LAVA = self::DRIP_LAVA_POINTED_DRIPSTONE;
	public const CAVE_VINES_PICK_BERRIES = self::PICK_BERRIES_CAVE_VINES;
	public const BIG_DRIPLEAF_TILT_DOWN = self::TILT_DOWN_BIG_DRIPLEAF;
	public const BIG_DRIPLEAF_TILT_UP = self::TILT_UP_BIG_DRIPLEAF;
	public const PLAYER_HURT_DROWN = self::MOB_PLAYER_HURT_DROWN;
	public const PLAYER_HURT_ON_FIRE = self::MOB_PLAYER_HURT_ON_FIRE;
	public const PLAYER_HURT_FREEZE = self::MOB_PLAYER_HURT_FREEZE;
	public const USE_SPYGLASS = self::ITEM_SPYGLASS_USE;
	public const STOP_USING_SPYGLASS = self::ITEM_SPYGLASS_STOP_USING;
	public const AMETHYST_BLOCK_CHIME = self::CHIME_AMETHYST_BLOCK;
	public const SCULK_CATALYST_BLOOM = self::BLOCK_SCULK_CATALYST_BLOOM;
	public const SCULK_SHRIEKER_SHRIEK = self::BLOCK_SCULK_SHRIEKER_SHRIEK;
	public const WARDEN_NEARBY_CLOSE = self::NEARBY_CLOSE;
	public const WARDEN_NEARBY_CLOSER = self::NEARBY_CLOSER;
	public const WARDEN_NEARBY_CLOSEST = self::NEARBY_CLOSEST;
	public const WARDEN_SLIGHTLY_ANGRY = self::AGITATED;
}
