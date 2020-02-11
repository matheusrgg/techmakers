
@extends('layouts.templatetechmakers')

@section('titulo')
TechMakers
@endsection

@section('conteudo')




<link rel="stylesheet" href="css/style.css" type="text/css">



<main>
    <div class="container">
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <h2>Carrinho de Compras</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-h">Produto</th>
                            <th>Preço</th>
                            <th class="quan">Quantidade</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    @if(Session::has('cart'))
                    <tbody>
                        @foreach($products as $product)
                        {{-- {{dd($product['item'])}} --}}
                        <tr>
                            <td class="product-col">
                                <img src="{{asset($product['item']->foto)}}" alt="">

                                <div class="p-title">
                                    <h5>{{$product['item']->name}}</h5>
                                </div>
                            </td>
                            <td class="price-col">{{$product['item']->price}}</td>
                            <td class="quantity-col">
                                <div class="pro-qty">
                                    <input type="text" value="{{$product['qty']}}">
                                </div>
                            </td>
                            <td class="total"></td>
                            <td class="product-close">x</td>
                        </tr>
                        @endforeach
                        


                    </tbody>
                </table>
            </div>

            {{-- <div class="cart-btn">
                <div class="row">
                            <div class="col-lg-6">
                                
                            </div>
                            <div class="col-lg-5 offset-lg-1 text-left text-lg-right">
                                <div class="site-btn clear-btn">Limpar carrinho</div>
                                
                            </div>
                </div>
            </div> --}}

        </div>

        <div class="shopping-method">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        {{-- <div class="shipping-info">
                            <h5>Tipo de envio</h5>
                            <div class="chose-shipping">
                                <div class="cs-item">
                                    <input type="radio" name="cs" id="one">
                                    <label for="one" class="active">
                                        Envio Grátis
                                        <span>Tempo estimado</span>
                                    </label>
                                </div>
                                <div class="cs-item">
                                    <input type="radio" name="cs" id="two">
                                    <label for="two">
                                        Envio amanhã + R$ 50,00
                                    </label>
                                </div>
                                <div class="cs-item last">
                                    <input type="radio" name="cs" id="three">
                                    <label for="three">
                                        In Store Pickup - Free
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="total-info">
                           
                                            <div class="row">
                                                <div class="col-lg-12 text-right">                                                
                                                    <a href="/home" class="primary-btn chechout-btn">Finalizar Compra</a>
                                                </div>
                                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Cart Page Section End -->



@endif
@endsection