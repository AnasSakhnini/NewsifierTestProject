<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
       

        
        $this->collection->each(function ($item, $key) {
            $item->position =$key+1;
           
        });
        // $currentItem = $this->collection::find(3);
        // $currentItem1 = $this->collection::find(4);
        // $currentItem2 = $this->collection::find(5);
        $c = collect([
            $this->collection->where('position', 100),
            $this->collection->where('position', 11),
            // $this->collection->where('position', 1),
        ]);
       
           return  $this->collection;
          
    }
}
