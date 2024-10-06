<tr class="bg-white dark:bg-slate-900">
    <td class="p-4"><a href=""><i class="mdi mdi-window-close text-red-600"></i></a></td>
    <td class="p-4">
        <span class="flex items-center">
            <img src="{{$panier->product->category->image}}" class="rounded shadow dark:shadow-gray-800 w-12" alt="">
            <span class="ms-3">
                <span class="block font-semibold">{{$panier->product->name}}</span>
            </span>
        </span>
    </td>
    <td class="p-4 text-center">{{$panier->product->price}}</td>
    <td class="p-4 text-center">
        <div class="qty-icons">
            <a href="{{route('panier.moins',$panier)}}"onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white minus">-</a>
            <input  name="quantite" value="{{$panier->quantite}}" min="1" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white pointer-events-none w-16 ps-4 quantity">
            <a href="{{route('panier.ajouter', $panier->product)}}" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle text-base text-center rounded-md bg-orange-500/5 hover:bg-orange-500 text-orange-500 hover:text-white plus">+</a>
        </div>
    </td>
    <td class="p-4  text-end">{{$panier->product->price * $panier->quantite}}€</td>
</tr>