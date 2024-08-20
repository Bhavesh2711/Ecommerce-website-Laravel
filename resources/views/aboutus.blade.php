@extends('master')
@section("content")
<style>
.aboutus{
   
    background-size: cover;
    width: 100%;
     background-color: #152352d1;
    height: 300px;

    
}
.textabout{
    color: #fff;
    padding: 88px 463px 10px 816px;
    text-shadow: 2px 2px #c6d0d9;
    
}
p.p_text {
    /* align-items: center; */
    justify-content: center;
    padding: 10px 16px 10px 620px;
    font-size: 18px;
    color: #fff;
    margin-bottom: 0px;
}
p.descripation {
    padding: 0px 447px 0px 497px;
    color: #fff;
    text-align: center;
}
.card_main {
    display: flex;
    justify-content: space-between;
    padding-bottom: 100px;

    
}
.card {
    flex: 1;
    margin: 0 10px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
}
.card-body {
    padding: 20px;
}
/* .box1{
    background-size: cover;
    background-position: center;
    background-image: url('https://static.tnn.in/photo/96680872/96680872.jpg');
   
} */
.box1 {
    background-size: cover;
    background-position: center;
    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDmg1d92NfyULgRdsK7BPLlJHMAjRHis8F2w&usqp=CAU);
    height: 50vh;
    border-radius: 4px;
}
.box2 {
    background-size: cover;
    background-position: center;
    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_y-g0-kUeEPzhOOMmvsxQ0tb8VnT2wiUXBq2rnuqyiA&s);
    height: 50vh;
    border-radius: 4px;
}
.box3 {
    background-size: cover;
    background-position: center;
    background-image: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEBIQFhUVFxUWFhUQGBUVFxcWFxcXFhYVFhUYHSggGBolGxUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGA8QFSsdFRktKysrKy0rLSstKy03Ky03KzUtKy0tKy0rKy0rLSsrLS0rKy0rLS0tNy03LSsrLS0rLf/AABEIANgA6QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYDBAcCAQj/xABJEAACAQMABQUKCgkDBQEAAAAAAQIDBBEFBhIhMUFRYXGyBxMiNXKBkZKx0RQjMjM0UlR0ofAVQmJkgpPBwtJEc/EWJaLD4ST/xAAXAQEBAQEAAAAAAAAAAAAAAAAAAQID/8QAHREBAQEAAwADAQAAAAAAAAAAAAERAhIxIUFRA//aAAwDAQACEQMRAD8A7iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADTu75Q4Yz08P8A6zQlf1nwT80ce1kvKRcTYK/8PuOVS8ygfHpKv9WfqxJ2hlWEFaqaYrR3uM0vJj/Q8UtPylwl+ER2hi0Ar36Wn9Z+rE+/pSf1n6sR2hiwAgP0pP6z9WI/StRcHF+XHH4xY7QxPgjdHaXjUl3uScKmMqLeVJcrhLl6uJJGkAAAAAAAAAAAAAAAAAAAAAAw3dXZg5cy3db3L8WZiP07LFGXXDtxFEXO5UIurJJvOzTUuGVvcpdC4nIdZu6rKVRxto98injvlVySl0wpxwlHpyXjXNzlZSjSztOjXUcccyTSx0t4XnPz3QiuLWV+cGeE1quq6ra+RuJd7r01CeG1h5jJJZeHxTSy8PO5PD5C60qsXyI4NoSD+E0dn9WpCTfNGMk5N9GE/Mdc0DVlKEVvzhezlFmJFyp6N24bUcdXNzZK1cpx+Mpt7t7XRymGrrlSpt0VeW6fB+FFtdClnCZsW84vZSeVuXpIqWsbnbipc5tpkLoF+C1zN+0x6y60ULKOarzJ/JhHfJvkSXP+dxlVgyfTls+6PdSfxVnu5NuaTf8ABstr0s2qetulH/pKPnqJf0GDoteLxmPyoPag+aS3+h8H1ltt6qnGM1wklL0rJxKOs+lfslD+avcbVDXjTEVGEbe0wkkvjY8FuW/HQa4/CWOzg45/11pr7PafzI+49f8AXOmvs9r5qkfcXtE612EHHlrzpr7NbfzI/wCJ7p676aSzK1tpY5FVgm//ABHaL1rrwOdaud1CFSrG3v6E7WrL5O3vhLyZ8JLpXoOio0yAAAAAAAAAAAAABH6d+Zl1w7cSQI/T3zEuuHbiS+EVS6WYQT+rPtHN9P6mUpVHUhtwcm2+94w2+L2Gtz6ml0HRrurGMIym0oxjUlJvkSk236Ecd0/3Q69SbVvs0qefB8GMpyX1pOSeM82DMaqT0doFUt0IvfxlJ5k1zbkkl+cnvXi/nb2sKNNuLrSanJbn3uCT2U+TLks9Bp6ra3zqTVKuoty+ROK2cvjsyit2XyNY34TznKnNbdEfC6K2GlKD2oN8OGHGXQ1jfyNLkyX7RylQyo7Dy3nMUuG/cs8u7eXbULSs4wnTbbVPDhnkT2sx6k0mubMiu09DXUJYVGafDaxmK6VNeD58lp1d0T3qLXGUt8muG5NKKfLxe/qNcrCOgav1finLrZzyrF3V3cXFTeqU3Rgnwi4rNR9eXjPMXvQ6xbyXMpFT0JRzRvpY3q7ufNwObTDoxRi9rl5Oj84JqlerkKZSu8G1T0gMalSmuDq1bWUKGXJuLajxlD9aK5+TrSa3nMv0RcfZ6/8ALn7joVO96TYheiXEs1zV6Gufs9x/Ln7i16gaPuKddylTq06ew1PvicVJ/q4i+LXPyb+cs9K76WZ6dyW8icUvCXNymelP3fn8CLpXH585u0a3Sjm6ax6xaKV1bTg14cU5U5csKkU3Fprhwx1F87l2l5XWjqFSbzJLYb8lL/jzFSpVCT7gz/7XDy59pm+Dn/R0YAHRzAAAAAAAAAAAI7T/AMxLrh24kiR+n/mJddPtxJfCOca0wlVtqtGPypU6sF/EnjzZaOE004yed3GMlJb1yNNPg8o/QWkrZy3x4r8Sj6b0PSqS2qtv4XLKO0m+tqSz589Znjcas1StEW6lcU3TT2ac4zbfIoSUnv58L0nT9E52EnzJEFo6whHwYwcI82OPW2236cFmte9xXykW3THPdIa4pXEl3mn3qMnF8e+NReHLPBPc3jHnOi2Wj0nlcEm9/IkiJnqzYSrd/cfD2tppOWy5ZztOHDOd/MWPvm3HYpxai/lzlxkvqpci/PVLRjsYYoS6VJ+khdSbdTp30Xy3l0vTslmuIKNKS6GQHc8e68+/XPtiZvjU9c00tbzo1ZU5rDi2vczVp12dU161a+Ex75TwqsVy/rLmb5zk9zQlTk4zi4yXFPczXG7Esxu0rk3KdyQcZmanWLiasNK5NqlcFepXBuUbgzi6sVCvyG9Rrlet65I29Uy1qepViydwfxVT8qp25FNozyXLuD+KqflT7cjXBnlXRQAdGAAAAAAAAAAACK1kqYo9c6a9M0SpD60/Mr/cpdtEvixWmY50Ivij02MnNph+CR5kffg0eZGXJ8yB4VvHmRkjFI+ZPuQMOkVmnLqfsK33P3iN59+ufbEsV/L4uXUVXUephXf3259sRfFnq3V5lc1g0FRul4SxNcJx4+cla1wac63SY8bcr05q9Wtn4SzHknHh5+YiFI7POopLEkmt/Hfu5sFZ0zqhSq5lQ+Llzfqvzch0nP8AWLx/FDhUNqlVMekdGVaDxUi1zP8AVfUzXpzNMJmhXJS2uCvUahv29QzYsqz21Uv3cH8VU/Kn25HL7W4OodwfxVT8qfbkXiV0UAG2QAAAAAAAAAACH1p+YX+5S7aJgjdYvmJdcO3El8Ip7Z8yeGxk5tsmRkx5PuSj3kZPGTDXrOOEllvgQNIv4uXUyn6pTx8L++3HtRbryXgPPNvKhqnHdd/fLj2ov0JSvWxymnO5Ml2iLrzM4utt3R9jdYIidU8fCOQYup6pWhOOzUSlHG9S3r0FX0xqst87Z9dNvst+w2lc9JnpXj5xNhflSItxeGmmuKZu0KpPaa0dGvHbikprzbS5mVNNxeHxXIdJdYsxO0ap1zuC1P8AtsY82X6alX/FHFbesdn7gni9dX/srCI6aADSAAAAAAAAAAAEZrH9Hn1w7cSTIzWX6PPrh24kopLYyeGz5kw0yZGTHk+5A1rqu84TxjmMPfpcMs93EfC6zFgo9zk+9ybbxh7uJDal08wu/vtz7YkvKfgSXQ3+BpahxzTvPv1z7Ygfb+iQN1EtekKZWr1EVD1ma05mxXNKpIqPXfD7GsakpHyNQipehX/AjNP2uWqkeXdL+jFOqZpz2oNPm/EeCIoHb+4J4vW59fJ85W5fzxRxSnE7l3BvFcPKn25Goy6MADSAAAAAAAAAAAEXrL9Hn1w7cSUIvWb6NPrh24koomRk85GTLT1kZPORkBUinxPHeF0nvIyBguIJQljmZp9z1fFXn365/tN28fgS6maPc+l8Veffrn+0De0mVW/kWXScyraQkBE3EjQqSNm5kR9WYR4qTPCmY5zMTmVW0qhnoz6iOUzdsuJKPWydr7g3iuHlT7cjjVWGDsvcG8Vw8qfakWJXRgAaQAAAAAAAAAAAi9Zvo0+uHbiShF6z/Rp9cO3ElHP8jJ5yMmWnrIyecjIHrIyecjIGO7fgS6mRGpNbFO8X77c/2krdvwJdTKzq1X2Y3a/fLj2oCW0jclcvaxs391xIC7uQjFc1CPqzPVasatSZR5nMxuZ5nI8ZKM9ORP6Jts+FyIidE2Uqs1GKe8udSgqUFFeczViEuI7zr/cG8Vw8ufakckrnW+4N4rh5c+1IsSujAA0gAAAAAAAAAABFaz/Rp9cO3ElSK1p+jT64duJKOd5GTHkZMtMmRkx5GQMmRkx5GQPN2/Al1MpGjK+y7pfvdx7UXS7fgS6mc5hWxUuvvVftBGzfXJC16x7uq+TQnI1IPUpmKUgyS0Rq/cXTxRpya4bT3RXXJgRLJjQOrla5a2YtQzvm9yXvL5ofUCjQxO6l3yS/VjlQ8/KyWvL2MVswSilyLd0f0M2riKt9H0rWGzTWXjwpPi3/AEIa/uMtmfSF9nO8gbu5EXXytWOw9wXxXDy59qRwyrWO59wXxXDy59pmoy6OACoAAAAAAAAAAAROtP0Wp/B24ksROtX0Wp/B24ko5rkZPGRkjT3kZPGRkD3kZPGRkDzdvwJdTOXXVTFW5X7zW7Z066fgS6mcpv38fc/eK3bYiMM55JHQer9xdy2aFNvHGT3Qj1ye7zFj1F1K+E/H3OY0ORJ4lUfRzR47zpvwmlbw73QhGEFwUVhbvaLVkVzQXc7trfE7mTrTXJwprzcX/wAE9WvYU4qMEopcFHcvwIu90t0rHMiDutINv8/nnMq39I6Ub5fQVy/vWY7q647yJuaxZE14u7kjK1U9V6n5Zo1ZmkJ1D9A9wXxXHy59pn53P0R3BfFcfLn2mB0cAFQAAAAAAAAAAAiNbH/+Wp/B24kuRmstFztaqjveztJc+y1LH4CjloyAZaMgAAAAMV18iXUzm1G0dW7rR+tdVU+jw979p0uvHMWugpGiIbN5XznPfHVS6Kiz58PKA6HVvo0oRpwwoxiopLkSWCFutI5ZXbnSj2nl7+g153/STF1K1rzpI2td545NKrdZ5jVqVy4jbrVzSrVeswyrGCdQqPlWoaspGWRj2QFOOT9C9wTxXHy59pn5/TUYtvkT/PsP0d3F7CVHRdLaTTk5Sw+Z4/rkC9AAqAAAAAAAAAAAAACg6f1TnCTnb4dN5exwcOdLnj1b0Vt0mtzcU+ZySfobAJYp3vph68PeO9/tQ9eHvAIp3v8Aah68PeO9/tQ9eHvAIHe/2oevD3ld05oGUpqtRqQhVjwkpReU+MZRzvi/w4gFFYv9HXc5Z7xBvldKpHZb6IzakjVWir1/6eXr0/eAEeloq8+zS9en7zw9DXn2aXr0/efQNHj9B3n2eXr0/wDIfoK8+zy9en7wBo+foK7+zy9en/kfVoG85Ld+vTX9wA0XXUvuUXFzONS8cadFNPYi8yljn/OOvg+/W1CNOEYQSUYpRilyJbkAaRlAAAAAAAB//9k=);
    height: 50vh;
    border-radius: 4px;
}
.box4 {
    background-size: cover;
    background-position: center;
    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy6dHBQhu06Kw-XgxPgfeMJhCwMxsOEQynJA&usqp=CAU);
    height: 50vh;
    border-radius: 4px;
}
h3.image_text {
    padding: 227px 10px 0px 25px;
    color: #fff;
}
.con{
    padding: 77px 190px 0px 190px ; 
}
.ptext{
    font-size: 18px;
}
    </style>
<div class="aboutus">
<div class="textabout">
    <b><h1>About Us</h1></b> </div>
    <p class="p_text">Do the SmartThings!
Make your everyday flow seamlessly with Smart Home Kits</p>
<p class="descripation">
Samsung fest is the best time to purchase mobile phones, tablets, televisions, soundbars, refrigerators, washing machines, air conditioners, wearables, kitchen care, accessories, laptops, and monitors. Explore the best offers and great deals on all major electronic categories during the sale.
</p>
</div>
<br>
<br>
<div class="help">
<h2><center> Help Me Choose</center></h2>
</div>
<div class="con">
<div class="card_main">
    <div class="card">
      
          <div class="box1">
            <h3 class="image_text">Best smart phone for you</h3>
          </div>
            <!-- <img src="https://static.tnn.in/photo/96680872/96680872.jpg" height="100%" width="100%"> -->
        
    </div>
    <div class="card">
    <div class="box2">
    <h3 class="image_text">Best smart phone for you</h3>
          </div>
    </div>
    <div class="card">
    <div class="box3">
    <h3 class="image_text">Best smart phone for you</h3>
          </div>
    </div>
    <div class="card">
    <div class="box4">
    <h3 class="image_text">Best smart phone for you</h3>
          </div>
    </div>
    </div>
    <div class="ptext">
    <p>Samsung fest is the best time to purchase mobile phones, tablets, televisions, soundbars, refrigerators, washing machines, air conditioners, wearables, kitchen care, accessories, laptops, and monitors. Explore the best offers and great deals on all major electronic categories during the sale.
    </p>
    <p>
    The more you spread the word to your friends and family, the more perks you unlock. So, it's not just about getting great deals, it's about sharing the savings with your loved ones. Why wait? The Samsung fest is your chance to take advantage of these incredible deals.
    </p>
    <p>
    Avail great deals and discounts with Samsung fest:<br>
1. Get up to 20% Instant bank cashback* on HDFC, ICICI, SBI and other leading bank card<br>
2. Get 5% off when you buy 2 or more selected products<br>
3. Get up to 5000* Welcome voucher on Samsung Shop App<br>
4. Best online exchange value for your current phones, tablets and smartwatches
    </p>
    <p>Samsung fest is a great chance to own the latest products such as the Galaxy S24 Ultra, Galaxy S24 | S24+, Galaxy Z Fold5 (Special Edition), Galaxy Z Flip5, Galaxy Book3, Galaxy Book3 Pro 360, Neo QLED 4K Smart TV, OLED 4K Smart TV, Convertible Freezer Double Door Refrigerator, Twin Cooling Plus™ Double Door Refrigerator, Ecobubble™ Front Load Washing Machine with AI Control, Ecobubble™ Top Load Washing Machine with Wi-Fi Connectivity, WindFree™ Inverter Split AC, and much more. Fulfil your wishlist with great deals from Samsung.</p>
    <p>Explore unbeatable deals, discounts, no-cost EMI options, cashbacks, combo offers, and much more during the Sale. So browse the range of high-quality Samsung electronic items. Our electronic store has everything for you at the most exciting prices. Our goal is to grant customers extra benefits, choices, and freedom.</p>
    </div>
    </div>
@endsection