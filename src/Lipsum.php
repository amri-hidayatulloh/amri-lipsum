<?php

namespace Amri\LipsumGenerator;

class Lipsum
{

    function __construct()
    {
        //nothing to do
    }

    public static function get()
    {
        $length = config('lipsum.limit_word');

        $collections =  self::loremipsum();
        $new_collections = array_slice($collections, rand(0, count($collections) - $length), $length);

        return implode(" ", $new_collections);
    }

    public static function getBy($start = 0, $length = 0)
    {
        $collections =  self::loremipsum();
        $new_collections = array_slice($collections, $start, $length);

        return implode(" ", $new_collections);
    }

    public static function loremipsum()
    {
        $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a nunc ac massa malesuada rhoncus ut vel eros. Phasellus vel congue velit. Curabitur nec aliquam sem. Nam vestibulum accumsan vestibulum. Aenean ipsum sapien, viverra sit amet orci at, semper condimentum nisl. Donec scelerisque eros sed sem consectetur tincidunt. Curabitur lobortis egestas ullamcorper. Nulla faucibus quam id ultrices molestie. Donec cursus augue et mauris tempor, vestibulum viverra erat pretium. Vestibulum eget felis et elit pretium faucibus. Donec pretium vehicula facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper accumsan odio imperdiet tincidunt. Morbi non semper tellus, eu bibendum lorem. In vitae malesuada est, vitae viverra diam. Nam convallis libero nunc, eget pellentesque ligula pharetra in. Ut faucibus feugiat velit, quis convallis orci imperdiet accumsan. Mauris tempor consectetur nulla eget tincidunt. Vestibulum molestie orci at nulla dictum volutpat. Quisque accumsan imperdiet posuere. Nullam sit amet laoreet magna. Fusce nec placerat metus, eu accumsan ante. Proin tincidunt, est ut volutpat maximus, nibh nibh cursus leo, in feugiat ante felis vel dui. Nulla dictum ligula non magna dignissim, ullamcorper dictum magna consequat. Proin euismod lectus eget erat fermentum ultricies. Curabitur commodo metus sit amet tellus viverra imperdiet. Nullam lacinia pellentesque velit, vel laoreet enim ornare quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus magna lectus, dignissim eu malesuada eget, elementum ut lorem. Nam condimentum turpis sed rhoncus finibus. Proin finibus leo ante, a lobortis tortor dictum eu. Ut suscipit leo sed posuere mattis. Morbi ac dui euismod, tincidunt sem nec, fermentum sem. Morbi eu tortor ullamcorper metus laoreet condimentum a nec dui. Suspendisse potenti. Pellentesque vitae magna porta, condimentum nunc a, placerat ex. Suspendisse potenti. Nam condimentum fringilla magna eget auctor. Aenean suscipit, urna ac luctus semper, nunc ante tincidunt nulla, sed sodales felis ante eget ligula. Sed sodales hendrerit orci tristique tristique. Sed at ex metus. Donec consectetur a tellus blandit consequat. Quisque sollicitudin facilisis magna, sit amet ultrices erat rhoncus eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus purus orci, hendrerit aliquam tincidunt non, tempus ac dui. Praesent consequat congue turpis, eu consectetur nulla semper quis. Phasellus quam lorem, volutpat non urna quis, feugiat ultricies lorem. Morbi venenatis laoreet varius. Vivamus tempor sodales tortor, in pretium lorem gravida at. Nunc sodales turpis ac lacus condimentum, non hendrerit magna interdum. Mauris rutrum, massa vel mattis efficitur, enim arcu convallis diam, sit amet ultrices augue sem sed libero. Cras eu blandit enim. In nibh nisl, ornare nec mollis et, tristique in felis. Sed vulputate, urna et bibendum tempus, ex mauris viverra elit, quis mattis ex sapien sed nunc. Morbi sed ante sed felis malesuada euismod vitae et tortor. Nulla lectus justo, lacinia at iaculis scelerisque, congue id urna. Aliquam orci felis, auctor quis egestas id, convallis vitae ligula. Donec eget efficitur lectus. Vivamus sed ex imperdiet, aliquam nisl ut, finibus eros. Etiam accumsan risus eget rutrum dignissim. Sed et ante facilisis, commodo tortor eget, aliquam diam. Nullam fringilla lacus diam, ac cursus nisi convallis id. Etiam facilisis, quam at consectetur blandit, erat ipsum aliquet nisi, ac sollicitudin massa sapien nec nisl. Sed laoreet quis sapien nec rhoncus. Vestibulum vitae metus felis. Curabitur ullamcorper luctus aliquet. Sed eu odio sit amet purus tincidunt aliquam placerat eu magna. Aliquam ac risus dictum, mollis odio et, interdum enim. Quisque vestibulum metus ante, et accumsan nunc euismod a. Fusce aliquam ipsum turpis. Donec volutpat, elit et pretium feugiat, elit justo imperdiet dolor, nec sagittis nisi elit ac nisl. Curabitur lectus felis, accumsan vitae augue et, blandit tincidunt tellus. Maecenas ac gravida lacus. Sed condimentum venenatis nisl nec molestie. Sed quis ultricies felis. Curabitur ullamcorper dictum egestas. Duis vitae enim viverra, euismod sem ac, dapibus quam. Sed ornare efficitur metus. Curabitur pharetra eu justo eu blandit. Sed dignissim faucibus urna a blandit. Aenean tempor, ex et vehicula lobortis, lorem urna convallis lectus, sit amet vehicula felis ex in mauris. Aenean ornare pharetra augue, non cursus risus imperdiet in. Praesent consectetur neque libero, scelerisque ullamcorper eros vulputate a. Vestibulum ut eros rhoncus, dapibus enim vel, cursus dolor. Morbi turpis ligula, efficitur eu ullamcorper non, posuere in erat. Nam risus ex, lacinia id purus nec, porttitor facilisis nisi. Vestibulum a augue mi. Donec lobortis lectus urna, sit amet maximus purus dictum ac. Ut eu molestie mauris, vel facilisis mi. Ut euismod odio non sollicitudin congue. Nunc nec augue quam. Proin eget tempor nunc. Pellentesque eget lacus metus. Maecenas nulla justo, dapibus et pharetra eu, gravida non erat. Nam lacus lorem, maximus a elit id, pulvinar auctor nisi. Integer in libero orci. Sed nunc ipsum, hendrerit quis justo vel, posuere posuere augue. Quisque nec varius velit. Aenean gravida dui eu eleifend auctor. Quisque accumsan, lacus ac sollicitudin egestas, nunc magna blandit lectus, quis blandit velit sapien pretium felis. Cras sollicitudin tortor vitae velit tincidunt porta. Ut purus tortor, porttitor et dapibus nec, dictum sed odio. Morbi feugiat in justo viverra elementum. Etiam sit amet libero dictum, volutpat sem nec, varius turpis. Proin vitae laoreet nisi. Morbi quis nibh mattis, aliquam erat et, interdum nulla. Etiam id ipsum massa. Cras ut ante in turpis faucibus ornare a vitae mauris. Mauris egestas sem id gravida suscipit. Pellentesque et pharetra augue, eu condimentum nibh";

        return explode(" ", $text);
    }
}
