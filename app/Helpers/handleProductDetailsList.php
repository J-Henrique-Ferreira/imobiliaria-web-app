<?php

function handleProductDetailsList($product)
{
    $translatedList =
        [
            [
                "name" => "Banheiros",
                "value" => $product->bathroom,
                "iconName" => "bathroom"
            ],
            [
                "name" => "Quartos",
                "value" => $product->bedroom,
                "iconName" => "bedroom"
            ],
            [
                "name" => "Suítes",
                "value" => $product->suite,
                "iconName" => "suite"
            ],
            [
                "name" => "Vagas",
                "value" => $product->parking_space,
                "iconName" => "parking_space"
            ],
            [
                "name" => "Área",
                "value" =>  $product->area_size . "mt²",
                "iconName" => "area_size"
            ],
            [
                "name" => "Condomínio",
                "value" => "R$ " . number_format($product["condominium"], 2, ',', '.'),
                "iconName" => "condominium"
            ],
            [
                "name" => "IPTU",
                "value" => "R$ " . number_format($product["iptu"], 2, ',', '.'),
                "iconName" => "iptu"
            ],
        ];

    return $translatedList;
}
