<?php

namespace App\Services;

class ProductService
{
    public function __construct(private ProductRepositoryInterface $repository)
    {
    }
}
