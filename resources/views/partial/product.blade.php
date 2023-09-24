 <ul>
     @foreach ($products as $key => $product)
         @if ($loop->even)
         <div class="bg-primary text-white">
             <li>
                 <p><strong>Product Number:</strong> {{ $key }}</p>
                 <div>
                     <p> {{ $product['product_name'] }} </p>
                     <p> {{ $product['color'] }} </p>
                     <p> {{ $product['price'] }} </p>
                 </div>
             </li>
         </div>
         @else
         <div class="bg-secondary text-white">
             <li>
                 <p><strong>Product Number:</strong> {{ $key }}</p>
                 <div>
                     <p> {{ $product['product_name'] }} </p>
                     <p> {{ $product['color'] }} </p>
                     <p> {{ $product['price'] }} </p>
                 </div>
             </li>
         </div>
         @endif

     @endforeach
 </ul>
