@extends('bakery.layout.master')
@section('title')
    Detail
@endsection


@section('content')

<div class="container-fuild" style="background-color:#CED8F6; padding-top: 100px; padding-bottom: 100px;">
    <div class="container" style="background-color:white; border-radius:10px; height: auto; padding-bottom: 20px;">
        <div class="row mt-5 mb-5" >
            <br><br><br>
            <div class="row" style="width: 100%; height: auto;">
           
                <div class="col-md-6 product" style="margin-left: 50px;">
                    <img src="{{ asset($books['image']) }}">
                </div>
                <div class="col-md-5">
                    <h1>{{ $books['book_name'] }}</h1>
                    <br>
                    <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>(5 customer review)</p>
                    <br><br>
                    <p>{{ $books['description'] }}</p>
                    <br><br>

                    <div class="row">
                        <div class="col-md-12 col-sm-6 c">
                            <div class="card" style="margin: 0px; border-radius: 20px; border: 1px solid lightgray; width: 300px;">
                                <div class="card-top" style="background-color: lightgray; padding: 15px; border-bottom: 1px solid gray; border-radius: 20px 20px 0px 0px;">${{ $books['price'] }}</div>
                                <div class="card-body" style="padding:35px;">
                                    <form method="POST" action="{{ route('add_cart' , $books['id']) }}">
                                        @csrf
                                        <section class="buy"><br><input type="number" name="quantity" style="width: 75%;"></section>
                                        <button type="submit" class="btn btn-primary" style="margin-left:80px;height:40px;margin-top:-45px;">Add To  Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <br><br>
                        <p>Catogories:</p>
                        <p>Tags:</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5" style="margin-top: 120px;">
                      
            <div class="col-md-5" style="margin-left:50px;">
                <p style="font-size:28px;">Book Details</p>
                <br><br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="col">First</td>
                            <td scope="col">Last</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-10">
                        <p style="font-size:28px;">About The Author</p><br>
                        <p style="font-size:20px;">Saifudin A.</p>
                        <p>How to Build a Successful Blog Business is a straight forward guide to building a publishing business online that covers everything from choosing a niche to hiring staff, registering a business to selling it.
                        Finding traffic to monetizing it whether you are interested in creating an additional income stream or building a fully-fledged business, this is an essential read for web entrepreneurs and online publishers.</p>
                    </div>
                    <div class="col-md-2">
                        <img src="/bakery/img/product/actor.jpg" style="border-radius: 50%;">
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        
        <br>
        <div class="row "style="margin-left:50px;">
            <p style="font-size:28px;">Description</p>
            <p>If you want to buy books online, you’ll get a better deal if you get them used. Depending on the condition you get them in, you may just end up<br> paying a few cents plus shipping. Make sure you read through the description of the book to see if there are any damages you should be aware of.</p><br><br>
            <p>Be sure to read everything about the item that you want to buy. A picture of a product can be deceiving. They can make products look much <br>smaller or bigger that they really are. Reading the description will allow you to be confident in the item you are purchasing.</p><br><br>
            <p>Look into online shopping clubs. Sites like ebates.com have some tremendous offers. You not only find out about sales going on at different sites,<br> but they pay you a percentage of your purchase when you buy from those sites. It is a great way to get a bonus check every four months and get the<br> things you need.</p><br><br>
            <p>Be aware of shipping order laws for online merchants. The company is supposed to send your order within the time frame listed in its ad. By law,<br> they have 30 days to send you your order or give you an option to cancel your order. If you do not receive your order within this time frame, call the<br> company to let them know.</p>
        </div>
    </div>
</div>
@endsection