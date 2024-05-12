<?php

namespace GameQ3\GameQ3;

class LaravelGameQ3
{
public function info($type, $ip, $port)
{
    $GameQ3 = new \GameQ3\GameQ3();
    $GameQ3->addServer([
        'type' => $type,
        'host' => $ip . ':' . $port,
    ]);
    $GameQ3->addFilter('secondstohuman');
    $results = $GameQ3->process();
    foreach ($results as $id => $var) {
        $players = $var['players'];
        $players = collect($var['players'])->sortBy('score')->reverse()->toArray();
        unset(
            $var['players'],
        );
        $var['ip'] = $ip;
        return array([
            'id' => $id,
            'var' => $var,
            'players' => $players,
    ]);

    }
}
}
