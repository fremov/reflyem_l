<?php

namespace App\Http\Controllers;

use App\Models\AllItems;


class DataBaseController extends Controller
{
    public function index() {
        // база данных все предметы
        $data = AllItems::all();
        // база данных чейнджлог
        $changelog = json_decode(file_get_contents(public_path('data/changelog/changelog.json')), true);

        // база данных заклинания
        $destract = json_decode(file_get_contents(public_path('data/spells/destract.json')), true);
        $change = json_decode(file_get_contents(public_path('data/spells/change.json')), true);
        $conjura = json_decode(file_get_contents(public_path('data/spells/conjura.json')), true);
        $illision = json_decode(file_get_contents(public_path('data/spells/illision.json')), true);
        $restore = json_decode(file_get_contents(public_path('data/spells/restore.json')), true);

        // база данных перки мага
        $alteration_perks = json_decode(file_get_contents(public_path('data/perks/mage/Alteration_perks.json')), true);
        $conjuration_perks = json_decode(file_get_contents(public_path('data/perks/mage/Conjuration_perks.json')), true);
        $destruction_perks = json_decode(file_get_contents(public_path('data/perks/mage/Destruction_perks.json')), true);
        $enchanting_perks = json_decode(file_get_contents(public_path('data/perks/mage/Enchanting_perks.json')), true);
        $illusion_perks = json_decode(file_get_contents(public_path('data/perks/mage/Illusion_perks.json')), true);
        $restoration_perks = json_decode(file_get_contents(public_path('data/perks/mage/Restoration_perks.json')), true);

        // база данных перки воина
        $archery_perks = json_decode(file_get_contents(public_path('data/perks/warrior/Archery_perks.json')), true);
        $block_perks = json_decode(file_get_contents(public_path('data/perks/warrior/Block_perks.json')), true);
        $heavy_Armor_perks = json_decode(file_get_contents(public_path('data/perks/warrior/Heavy_Armor_perks.json')), true);
        $one_Handed_perks = json_decode(file_get_contents(public_path('data/perks/warrior/One_Handed_perks.json')), true);
        $smithing_perks = json_decode(file_get_contents(public_path('data/perks/warrior/Smithing_perks.json')), true);
        $two_Handed_perks = json_decode(file_get_contents(public_path('data/perks/warrior/Two_Handed_perks.json')), true);

        // база данных перки асасина
        $alchemy_perks = json_decode(file_get_contents(public_path('data/perks/thief/Alchemy_perks.json')), true);
        $light_Armor_perks = json_decode(file_get_contents(public_path('data/perks/thief/Light_Armor_perks.json')), true);
        $lockpicking_perks = json_decode(file_get_contents(public_path('data/perks/thief/Lockpicking_perks.json')), true);
        $pickpocket_perks = json_decode(file_get_contents(public_path('data/perks/thief/Pickpocket_perks.json')), true);
        $sneak_perks = json_decode(file_get_contents(public_path('data/perks/thief/Sneak_perks.json')), true);
        $speech_perks = json_decode(file_get_contents(public_path('data/perks/thief/Speech_perks.json')), true);


        return view('layouts.dataBase', compact('data',
            'changelog',
            'destract',
            'change',
            'conjura',
            'illision',
            'restore',
            'alteration_perks',
            'conjuration_perks',
            'destruction_perks',
            'enchanting_perks',
            'illusion_perks',
            'restoration_perks',
            'archery_perks',
            'block_perks',
            'heavy_Armor_perks',
            'one_Handed_perks',
            'smithing_perks',
            'two_Handed_perks',
            'alchemy_perks',
            'light_Armor_perks',
            'lockpicking_perks',
            'pickpocket_perks',
            'sneak_perks',
            'speech_perks',
        ));
    }

}
