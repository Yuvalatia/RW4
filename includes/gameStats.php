<?php


    // STORE PRICE STATS

    //w1
    $w1 = ["gold" => 500,"wood" => 300, "ore" => 300];
    //w2
    $w2 = ["gold" => 2500,"wood" => 1400, "ore" => 1400];
    //w3
    $w3 = ["gold" => 12500,"wood" => 7000, "ore" => 7000];
    //w4
    $w4 = ["gold" => 50000,"wood" => 28000, "ore" => 28000];

    // WEAPONGS STRENGTH STATS

    //w1
    $s1 = 10;
    //w2
    $s2 = 80;
    //w3
    $s3 = 450;
    //w4
    $s4 = 2000;


    // UNITS PRICE STATS
    $warriorPrice = 50;
    $workerPrice  = 20;
    $intlgPrice   = 100;
    $spyPrice     = 80;
    $expPrice     = 70;


    // UPGRADES

    // RESOURCES UPGRADES LEVELS

    // GOLD RECEIVED PER LEVEL
    $goldLevel = [/*0:*/["goldCost"=>0,"perUpdate"=>10],
                    /*1:*/["goldCost"=>5000,"perUpdate"=>20],
                    /*2:*/["goldCost"=>15000,"perUpdate"=>30],
                    /*3:*/["goldCost"=>50000,"perUpdate"=>35],
                    /*4:*/["goldCost"=>90000,"perUpdate"=>40],
                    /*5:*/["goldCost"=>150000,"perUpdate"=>45],
                    /*6:*/["goldCost"=>500000,"perUpdate"=>60],
                    /*7:*/["goldCost"=>1000000,"perUpdate"=>70]];
    // WOOD RECEIVED PER LEVEL
    $woodLevel = [/*0:*/["woodCost"=>0,"perUpdate"=>10],
        /*1:*/["woodCost"=>4000,"perUpdate"=>20],
        /*2:*/["woodCost"=>10000,"perUpdate"=>30],
        /*3:*/["woodCost"=>40000,"perUpdate"=>35],
        /*4:*/["woodCost"=>80000,"perUpdate"=>40],
        /*5:*/["woodCost"=>100000,"perUpdate"=>45],
        /*6:*/["woodCost"=>250000,"perUpdate"=>60],
        /*7:*/["woodCost"=>1000000,"perUpdate"=>70]];
    // ORE RECEIVED PER LEVEL
    $oreLevel = [/*0:*/["oreCost"=>0,"perUpdate"=>10],
        /*1:*/["oreCost"=>4000,"perUpdate"=>20],
        /*2:*/["oreCost"=>10000,"perUpdate"=>30],
        /*3:*/["oreCost"=>40000,"perUpdate"=>35],
        /*4:*/["oreCost"=>80000,"perUpdate"=>40],
        /*5:*/["oreCost"=>100000,"perUpdate"=>45],
        /*6:*/["oreCost"=>250000,"perUpdate"=>60],
        /*7:*/["oreCost"=>1000000,"perUpdate"=>70]];
    // TURNS RECEIVED PER LEVEL
    $turnsLevel = [/*0:*/["turnsCost"=>0,"perUpdate"=>3],
        /*1:*/["turnsCost"=>250,"perUpdate"=>4],
        /*2:*/["turnsCost"=>800,"perUpdate"=>5],
        /*3:*/["turnsCost"=>2000,"perUpdate"=>6]];

    // UNTRAINED RECEIVED PER LEVEL
    $untrainedLevel = [/*0:*/["goldCost"=>500,"woodCost"=>250,"oreCost"=>250,"perUpdate"=>30],
        /*1:*/["goldCost"=>2500,"woodCost"=>1250,"oreCost"=>1250,"perUpdate"=>40],
        /*2:*/["goldCost"=>5000,"woodCost"=>2500,"oreCost"=>2500,"perUpdate"=>50],
        /*3:*/["goldCost"=>10000,"woodCost"=>5000,"oreCost"=>5000,"perUpdate"=>60],
        /*4:*/["goldCost"=>25000,"woodCost"=>12500,"oreCost"=>12500,"perUpdate"=>70],
        /*5:*/["goldCost"=>100000,"woodCost"=>50000,"oreCost"=>50000,"perUpdate"=>80],
        /*6:*/["goldCost"=>500000,"woodCost"=>250000,"oreCost"=>250000,"perUpdate"=>90],
        /*7:*/["goldCost"=>1000000,"woodCost"=>500000,"oreCost"=>500000,"perUpdate"=>100]];
    // POWER RECEIVED PER LEVEL
    $powerLevel = [/*0:*/["goldCost"=>0,"perUpdate"=>0],
        /*1:*/["goldCost"=>2000,"perUpdate"=>0.1],
        /*2:*/["goldCost"=>5000,"perUpdate"=>0.2],
        /*3:*/["goldCost"=>10000,"perUpdate"=>0.3],
        /*4:*/["goldCost"=>25000,"perUpdate"=>0.4],
        /*5:*/["goldCost"=>100000,"perUpdate"=>0.5],
        /*6:*/["goldCost"=>250000,"perUpdate"=>0.6],
        /*7:*/["goldCost"=>500000,"perUpdate"=>0.7],
        /*8:*/["goldCost"=>1000000,"perUpdate"=>0.8],
        /*9:*/["goldCost"=>2500000,"perUpdate"=>0.9],
        /*10:*/["goldCost"=>10000000,"perUpdate"=>1]];
    // WIZDOM RECEIVED PER LEVEL
    $wizdomLevel = [/*0:*/["goldCost"=>500,"woodCost"=>250,"oreCost"=>250,"perUpdate"=>5],
        /*1:*/["goldCost"=>2500,"woodCost"=>1250,"oreCost"=>1250,"perUpdate"=>7],
        /*2:*/["goldCost"=>5000,"woodCost"=>2500,"oreCost"=>2500,"perUpdate"=>10],
        /*3:*/["goldCost"=>10000,"woodCost"=>5000,"oreCost"=>5000,"perUpdate"=>12],
        /*4:*/["goldCost"=>25000,"woodCost"=>12500,"oreCost"=>12500,"perUpdate"=>14],
        /*5:*/["goldCost"=>100000,"woodCost"=>50000,"oreCost"=>50000,"perUpdate"=>18],
        /*6:*/["goldCost"=>500000,"woodCost"=>250000,"oreCost"=>250000,"perUpdate"=>22],
        /*7:*/["goldCost"=>1000000,"woodCost"=>500000,"oreCost"=>500000,"perUpdate"=>25]];


    // ARMYS PER ATT PAGE
    $armysInPage = 30;

    // actions turns costs
    $attCost    = 10;
    $spyCost    = 2;
    $dragonCost = 50;

    // WON STATS GAIN
    $goldEarnd    = 0.01*rand(20,40);
    $woodEarnd    = 0.01*rand(20,30);
    $oreEarnd    = 0.01*rand(20,30);
    $warriorsLost = 0.01*rand(5,15);


    // RACE DECODE FUNCTION
    function race($race_id){
        switch ($race_id) {
            case 0:
                return "Orc";
        break;
            case 1:
                return "Human";
        break;
            case 2:
                return "Elf";
        break;
            case 3:
                return "Dead";
        break;
            default:
                return "undefined";
        }
    }
?>