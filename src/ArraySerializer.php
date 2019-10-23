<?php
namespace Gtechmx\Fractal;

use League\Fractal\Serializer\ArraySerializer as OriginalArraySerialicer;

class ArraySerializer extends OriginalArraySerialicer
{
    /**
     * Serialize a collection.
     *
     * @param string $resourceKey
     * @param array  $data
     *
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return $resourceKey ? [ $resourceKey => $data ] : $data;
    }
}
