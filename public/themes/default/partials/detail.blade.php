<section>
<!--     <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="leisure_listing.html">Women</a></li>
      <li class="active"><a href="#">Shirts &amp; Blouses</a></li>
    </ul> -->
    <!--PRODUCT DETAIL STARTS-->
    <div id="product_detail"> 
      <div class="product_rightcol">
        @foreach (Theme::getDetail() as $element)
        <h1>{{$element->title}}</h1>
        <p class="short_dc">
          {{$element->description}}
        </p>
        <div class="add_to_buttons">
          <button onClick="window.location='{{URL::route('information-request', array($element->id, $element->slug))}}'" class="add_cart">Download</button>
        </div>
        @endforeach
      </div>
    <!--Product Right Ends--> 
  </div>
  <!--PRODUCT DETAIL ENDS--> 
  
  
  </section>