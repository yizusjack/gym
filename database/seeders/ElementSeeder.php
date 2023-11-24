<?php

namespace Database\Seeders;

use App\Models\Element;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $el = new Element();

        $el->name_el = 'Front tuck';

        $el->description_el = 'Salto fwd tucked';

        $el->value_el = 0.1;

        $el->category_el = 'AA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front pike';

        $el->description_el = 'Salto fwd piked';

        $el->value_el = 0.1;

        $el->category_el = 'AA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Aerial walkover';

        $el->description_el = 'Free (aerial) walkover fwd';

        $el->value_el = 0.1;

        $el->category_el = 'AA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Aerial cartwheel';

        $el->description_el = 'Free (aerial) cartwheel or free (aerial) round-off';

        $el->value_el = 0.1;

        $el->category_el = 'AA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Back tuck';

        $el->description_el = 'Salto bwd tucked';

        $el->value_el = 0.1;

        $el->category_el = 'AA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Back pike';

        $el->description_el = 'Salto bwd piked';

        $el->value_el = 0.1;

        $el->category_el = 'AA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Back layout';

        $el->description_el = 'Salto bwd stretched';

        $el->value_el = 0.1;

        $el->category_el = 'AA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Whip';

        $el->description_el = 'Whip salto bwd';

        $el->value_el = 0.1;

        $el->category_el = 'AA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Split leap';

        $el->description_el = 'Split leap fwd (leg separation 180°)';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Tuck jump with spli';

        $el->description_el = 'Tuck jump with separation of legs to cross split (180°) during flight phase';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Side leap';

        $el->description_el = 'Leap fwd with ¼ turn (90°) into straddle pike position (both legs above horizontal) or side split to land on one or both feet';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Wolf jump';

        $el->description_el = 'Stride leap fwd with change of legs to wolf position';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Pike jump';

        $el->description_el = 'Pike jump (hip < 90°)';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Straddle pike jump';

        $el->description_el = 'Straddle pike jump (both legs above horizontal), or side split jump (leg separation 180˚)';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Shushunova';

        $el->alias_el = 'Shushunova';

        $el->description_el = 'Straddle pike (both legs above horizontal), or side split jump landing in front lying support (also with ½ turn (180°)';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Stag jump';

        $el->description_el = 'Stag jump';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Sissone';

        $el->description_el = 'Sissone (leg separation 180°on the diagonal/45°to the floor)';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Split jump';

        $el->description_el = 'Split jump (leg separation 180°)';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Stretched jump full';

        $el->description_el = 'Stretched hop or jump with 1/1 turn (360°)';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Cat leap';

        $el->description_el = 'Leap with alternate leg change (knees above horizontal)';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Fouetté hop';

        $el->description_el = 'Hop with ½ (180˚) turn to land in arabesque with free leg above horizontal (';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Wolf hop';

        $el->description_el = 'Hop or Jump with one leg bent and the other – extended straight, fwd above horizontal with knees together';

        $el->value_el = 0.1;

        $el->category_el = 'AD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Full turn';

        $el->description_el = '1/1 turn (360°) on one leg – free leg optional below horizontal';

        $el->value_el = 0.1;

        $el->category_el = 'AT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front tuck half';

        $el->description_el = 'Salto fwd tucked with ½ or 1/1 twist (180° or 360°)';

        $el->value_el = 0.2;

        $el->category_el = 'BA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front pike half';

        $el->description_el = 'Salto fwd piked with ½ twist (180°)';

        $el->value_el = 0.2;

        $el->category_el = 'BA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front layout';

        $el->alias_el = 'Barani';

        $el->description_el = 'Salto fwd stretched, also with ½ twist (180°)';

        $el->value_el = 0.2;

        $el->category_el = 'BA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Arabian';

        $el->description_el = 'Arabian salto tucked or piked, (take-off bwd with ½ twist [180°], salto fwd) – landing optional';

        $el->value_el = 0.2;

        $el->category_el = 'BA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Layout half';

        $el->description_el = 'Salto bwd stretched with ½ (180°)';

        $el->value_el = 0.2;

        $el->category_el = 'BA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Layout full';

        $el->description_el = 'Salto bwd tucked or stretched with 1/1 twist (180° or 360°)';

        $el->value_el = 0.2;

        $el->category_el = 'BA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Whip half';

        $el->description_el = 'Whip salto bwd with ½ twist (180°)';

        $el->value_el = 0.2;

        $el->category_el = 'BA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Split leap half';

        $el->description_el = 'Split leap with ½ turn (180°)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Tour jeté';

        $el->description_el = 'Fouette Hop with leg change to cross split (leg separation 180°) also to ring position';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Butterfly with feet above hips';

        $el->description_el = 'Butterfly fwd torso parallel to floor, slightly arched, legs straddled and feet above hip height during flight';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Butterfly with feet below hips';

        $el->description_el = 'Butterfly bwd torso parallel to floor, slightly arched, legs straddled and feet at or slightly below hip height during flight.';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Switch leap 1/4';

        $el->alias_el = 'Johnson';

        $el->description_el = 'Switch leap with ¼ turn (90°) to side split or to straddle pike position (both legs above horizontal)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Switch leap';

        $el->description_el = 'Leap fwd with leg change (free leg swing to 45˚) to cross split (180° separation < after leg change)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Sheep jump';

        $el->description_el = 'Jump with upper back arch and head release with feet almost touching head (sheep jump)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Straddle pike half';

        $el->description_el = 'Straddle pike or side split jump with ½ turn (180°)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Split jump half';

        $el->description_el = 'Split Jump with ½ turn (180°)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Shushunova full';

        $el->alias_el = 'Shushunova';

        $el->description_el = 'horizontal), or side split jump with 1/1 turn (360°) landing in front lying support';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Ring jump';

        $el->description_el = 'Ring jump (rear foot at head height, body arched and head dropped bwd, 180° separation of legs)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Stag ring jump';

        $el->description_el = 'Stag ring jump (rear foot at head height, body arched and head dropped bwd)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Split ring jump';

        $el->description_el = 'Split jump to ring position with ½ turn (180˚)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Cat leap full';

        $el->description_el = 'Cat leap with 1/1 turn (360º)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Hop half';

        $el->description_el = 'Hop with ½ turn (180°) free leg extended above horizontal throughout';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Tuck jump full';

        $el->description_el = 'Tuck hop or jump with 1/1 turn (360º)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Wolf hop full';

        $el->description_el = 'Wolf hop or jump with 1/1 turn (360°)';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Wolf hop full to lying support';

        $el->description_el = 'Wolf hop or jump with 1/1 turn (360°) landing in front lying support';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = '2 turn handstand';

        $el->description_el = 'Handstand wth two turns';

        $el->value_el = 0.2;

        $el->category_el = 'BD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double turn';

        $el->description_el = '2/1 turn (720°) on one leg – free leg optional below horizontal';

        $el->value_el = 0.2;

        $el->category_el = 'BT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'L turn';

        $el->description_el = '1/1 turn (360°) with heel of extended free leg fwd at horizontal throughout turn (support leg may be straight or bent)';

        $el->value_el = 0.2;

        $el->category_el = 'BT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Y turn';

        $el->description_el = '1/1 turn (360°) with free leg held upward in 180° split position throughout turn';

        $el->value_el = 0.2;

        $el->category_el = 'BT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Attitude turn';

        $el->description_el = '1/1 turn (360°) in back attitude (knee of free leg at horizontal throughout turn)';

        $el->value_el = 0.2;

        $el->category_el = 'BT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Penché turn';

        $el->description_el = '1/1 turn (360°) in scale fwd with free leg above horizontal throughout turn';

        $el->value_el = 0.2;

        $el->category_el = 'BT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Illusion';

        $el->description_el = '1/1 illusion turn (360°) through standing split without touching floor with hand';

        $el->value_el = 0.2;

        $el->category_el = 'BT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Wolf turn';

        $el->description_el = '1/1 turn (360°) in tuck stand on one leg - free leg straight throughout turn';

        $el->value_el = 0.2;

        $el->category_el = 'BT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Back turn';

        $el->description_el = '2/1 spin (720°) or more on back in kip position (hip-leg < closed)';

        $el->value_el = 0.2;

        $el->category_el = 'BT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front layout full';

        $el->description_el = 'Salto fwd stretched with 1/1 (360°)';

        $el->value_el = 0.3;

        $el->category_el = 'CA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front layout 1 1/2';

        $el->alias_el = 'Rudi';

        $el->description_el = 'Salto fwd stretched with 1 1/2 twist (540°)';

        $el->value_el = 0.3;

        $el->category_el = 'CA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = '1½ twist';

        $el->description_el = 'Salto bwd stretched with 1½ twist (540°)';

        $el->value_el = 0.3;

        $el->category_el = 'CA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double twist';

        $el->description_el = 'Salto bwd stretched with 2/1 twist (720°)';

        $el->value_el = 0.3;

        $el->category_el = 'CA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Whip full';

        $el->description_el = 'Whip salto bwd with 1/1 twist (360°)';

        $el->value_el = 0.3;

        $el->category_el = 'CA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Split leap full';

        $el->description_el = 'Split leap with 1/1 turn (360°)';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Tour jeté half';

        $el->alias_el = 'Produnova';

        $el->description_el = 'Tour jeté with additional ½ turn (180°), landing on one or both feet, or in split sit position';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Tour jeté 3/4';

        $el->alias_el = 'Csillag';

        $el->description_el = 'Leap fwd, through tour jeté technique, with ¾ turn (270°) into straddle pike position with additional ¼ turn (90°), landing on one or both feet';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Switch leap half';

        $el->alias_el = 'Frolova';

        $el->description_el = 'Switch leap with ½ turn (180°) in flight phase';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Switch ring';

        $el->description_el = 'Switch leap to ring position (180° separation of legs)';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Pike jump full';

        $el->description_el = 'Pike jump (hip < 90°) with 1/1 turn (360°)';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Straddle jump full';

        $el->alias_el = 'Popa';

        $el->description_el = 'Straddle pike or side split jump with 1/1 turn (360°)';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Splitjump full';

        $el->description_el = 'Split Jump with 1/1 turn (360°)';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Split ring leap';

        $el->description_el = 'Split ring leap (180° separation of legs)';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double stretched jump';

        $el->description_el = 'Stretched hop or jump with 2/1 turn (720°)';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double cat leap';

        $el->description_el = 'Cat leap with 2/1 turn (720°)';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Hop full';

        $el->description_el = 'Hop with 1/1 turn (360°), free leg extended above horizontal throughout';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double tuck jump';

        $el->description_el = 'Tuck hop or jump with 2/1 turn (720°) also landing in front lying support';

        $el->value_el = 0.3;

        $el->category_el = 'CD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Triple turn';

        $el->description_el = '3/1 turn (1080°) on one leg – free leg optional below horizontal';

        $el->value_el = 0.3;

        $el->category_el = 'CT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double turn from L to wolf';

        $el->alias_el = 'Nguyen';

        $el->description_el = '2/1 (720°) pirouette starting with free leg at horizontal, lowering to complete the turn in wolf position';

        $el->value_el = 0.3;

        $el->category_el = 'CT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front layout double twist';

        $el->alias_el = 'Tarasevich';

        $el->description_el = 'Salto fwd stretched with 2/1 twist (720°)';

        $el->value_el = 0.4;

        $el->category_el = 'DA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = '2½ twist';

        $el->description_el = 'Salto bwd stretched with 2½ twist (900°)';

        $el->value_el = 0.4;

        $el->category_el = 'DA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double tuck';

        $el->alias_el = 'Kim';

        $el->description_el = 'Double salto bwd tucked';

        $el->value_el = 0.4;

        $el->category_el = 'DA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double pike';

        $el->alias_el = 'Kim';

        $el->description_el = 'Double salto bwd pike';

        $el->value_el = 0.4;

        $el->category_el = 'DA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Tour jeté full';

        $el->alias_el = 'Gogean';

        $el->description_el = 'Tour jeté with additional 1/1 turn (360°), landing on one or both feet';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Switch leap full';

        $el->description_el = 'Switch leap with 1/1 turn (360°) in flight phase';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Johnson full';

        $el->alias_el = 'Bullimar';

        $el->description_el = 'Johnson with additional 1/1 turn (360°)';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Switch ring full';

        $el->alias_el = 'Sankova';

        $el->description_el = 'Switch leap to ring position with ½ turn (180°)';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Straddle jump 1 1/2';

        $el->description_el = 'Straddle pike or side split jump with 1½ turn (540°)';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Split jump 1 1/2';

        $el->description_el = 'Split Jump with 1½ turn (540°)';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Tour jetté half with ring';

        $el->alias_el = 'Ferrari';

        $el->description_el = 'Tour jeté, to ring position with additional ½ turn (180°)';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Ring jump full';

        $el->alias_el = '(Jurkowska-Kowalska';

        $el->description_el = 'Split jump to ring position with 1/1 turn (360°)';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Ring leap full';

        $el->alias_el = 'Ting';

        $el->description_el = 'Split leap to ring position with ½ turn (180°)';

        $el->value_el = 0.4;

        $el->category_el = 'DD';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double L turn';

        $el->description_el = '2/1 turn (720°) with heel of extended free leg fwd at horizontal throughout turn (support leg may be straight or bent)';

        $el->value_el = 0.4;

        $el->category_el = 'DT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double Y turn';

        $el->alias_el = 'Memmel';

        $el->description_el = '2/1 turn (720°) with free leg held upward in 180° split position throughout turn';

        $el->value_el = 0.4;

        $el->category_el = 'DT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double attitude turn';

        $el->alias_el = 'Semenova';

        $el->description_el = '2/1 turn (720°) in back attitude (knee of free leg at horizontal throughout turn)';

        $el->value_el = 0.4;

        $el->category_el = 'DT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double scorpion turn';

        $el->alias_el = 'Berar';

        $el->description_el = '2/1 turn (720°) with free leg held with both hands bwd/upward throughout turn';

        $el->value_el = 0.4;

        $el->category_el = 'DT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double wolf turn';

        $el->description_el = '2/1 turn (720°) in tuck stand on one leg - free leg straight throughout turn (no turn initiation with a push from hands on floor)';

        $el->value_el = 0.4;

        $el->category_el = 'DT';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double front';

        $el->alias_el = 'Podkopayeva';

        $el->description_el = 'Double salto fwd tucked';

        $el->value_el = 0.5;

        $el->category_el = 'EA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = '2 1/2 front twist';

        $el->alias_el = 'Cojocar';

        $el->description_el = 'Salto fwd stretched with 2½ twist (900°)';

        $el->value_el = 0.5;

        $el->category_el = 'EA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double arabian';

        $el->alias_el = 'Andreasen / Jentsch';

        $el->description_el = 'Arabian double salto tucked';

        $el->value_el = 0.5;

        $el->category_el = 'EA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double arabian half';

        $el->description_el = 'Arabian double salto tucked with ½ twist (180°)';

        $el->value_el = 0.5;

        $el->category_el = 'EA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Triple twist';

        $el->description_el = 'Salto bwd stretched with 3/1 twist (1080°)';

        $el->value_el = 0.5;

        $el->category_el = 'EA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Full in double tuck';

        $el->alias_el = 'Mukhina';

        $el->description_el = 'Double salto bwd tucked or piked with 1/1 twist (360°)';

        $el->value_el = 0.5;

        $el->category_el = 'EA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Full in double pike';

        $el->alias_el = 'Mukhina';

        $el->description_el = 'Double salto bwd piked with 1/1 twist (360°)';

        $el->value_el = 0.5;

        $el->category_el = 'EA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double wolf hop';

        $el->description_el = 'Wolf hop or jump with 2/1 turn (720°)';

        $el->value_el = 0.5;

        $el->category_el = 'ED';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Quad turn';

        $el->alias_el = 'Gómez';

        $el->description_el = '4/1 turn (1440°) on one leg – free leg optional below horizontal (Gomez)';

        $el->value_el = 0.5;

        $el->category_el = 'ET';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Triple Y turn';

        $el->alias_el = 'Mustafina';

        $el->description_el = '3/1 turn (1080) with free leg held upward in 180° split position throughout turn';

        $el->value_el = 0.5;

        $el->category_el = 'ET';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Triple wolf turn';

        $el->alias_el = 'Mitchell';

        $el->description_el = '3/1 turn (1080°) in tuck stand on one leg - free leg straight throughout turn (no turn initiation with a push from hands on floor)';

        $el->value_el = 0.5;

        $el->category_el = 'ET';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double front half';

        $el->alias_el = 'Podkopayeva II';

        $el->description_el = 'Double salto fwd tucked with ½ twist (180°)';

        $el->value_el = 0.6;

        $el->category_el = 'FA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front double pike';

        $el->alias_el = 'Dowell';

        $el->description_el = 'Double salto fwd piked';

        $el->value_el = 0.6;

        $el->category_el = 'FA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Front triple twist';

        $el->alias_el = 'Maldonado';

        $el->description_el = 'Salto fwd stretched with 3/1 twist (1080°)';

        $el->value_el = 0.6;

        $el->category_el = 'FA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double arabian pike';

        $el->alias_el = 'Dos Santos I';

        $el->description_el = 'Arabian double salto piked';

        $el->value_el = 0.6;

        $el->category_el = 'FA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double arabian pike half';

        $el->alias_el = 'Oliveira';

        $el->description_el = 'Arabian double salto piked with 1/2 twist';

        $el->value_el = 0.6;

        $el->category_el = 'FA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = '3½ twist';

        $el->description_el = 'Salto bwd stretched with 3½ twist';

        $el->value_el = 0.6;

        $el->category_el = 'FA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double layout';

        $el->description_el = 'Double salto bwd stretched';

        $el->value_el = 0.6;

        $el->category_el = 'FA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double layout half out';

        $el->alias_el = 'Biles I';

        $el->description_el = 'Double Salto bwd stretched with ½ twist (180°)';

        $el->value_el = 0.7;

        $el->category_el = 'GA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double arabian layout';

        $el->alias_el = 'Dos Santos II';

        $el->description_el = 'Arabian double salto stretched';

        $el->value_el = 0.8;

        $el->category_el = 'HA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double twisting double tuck';

        $el->alias_el = 'Silivas';

        $el->description_el = 'Double salto bwd tucked with 2/1 twist (720°)';

        $el->value_el = 0.8;

        $el->category_el = 'HA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Full in double layout';

        $el->alias_el = 'Chusovitina / Touzhikova';

        $el->description_el = 'Double salto bwd stretched with 1/1 twist (360°)';

        $el->value_el = 0.8;

        $el->category_el = 'HA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Double twisting double layout';

        $el->alias_el = 'Moors';

        $el->description_el = 'Double Salto bwd stretched with 2/1 twist (720°)';

        $el->value_el = 0.9;

        $el->category_el = 'IA';

        $el->aparatos_id = 4;

        $el->save();

        $el = new Element();

        $el->name_el = 'Triple twisting double tuck';

        $el->alias_el = 'Biles II';

        $el->description_el = 'Double salto bwd tucked with 3/1 twist (1080°)';

        $el->value_el = 1;

        $el->category_el = 'JA';

        $el->aparatos_id = 4;

        $el->save();
    }
}
