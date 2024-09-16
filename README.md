# train-tracking
Very loose use of the word "tracking"

## How to use this

I wrote this to accompany my very long cross-country train trips in July/August of 2024. 

Read more about that here: https://tedium.co/2024/09/15/amtrak-cross-country-travel-faq/

How this works: 

(I assume that you know which train number you're riding and which day of the month you'll be on that train)

For each train you're riding, you'll want a statement like this:

```
case 21:  
   echo "Travelling from Boston to Chicago, via Albany.";  
   $train=449;  
   $jpg="lsl";  
   break;`
```

* In this example 21 is the day in the month you're travelling, ie. July 21st, August 21st, [the 27th of Geldof](https://www.youtube.com/watch?v=b4VqbmeJ32U), etc.
* You're on train 449 (Lake Shore Limited)
* $jpg lets you specify a local image to include with your internary. In the example shown "lsl.jpg" is an image in the same folder as this script. [Change line 64](https://github.com/mattl/train-tracking/blob/main/trains.php#L64) if you want to use a remote image, PNG, etc.

### Testing it

[Uncomment line 7](https://github.com/mattl/train-tracking/blob/main/trains.php#L7) and you can add `?fake=21` or whatever to your page to pretend its a date it isn't. Time travel!

### Using this

* [No Rights Reserved](LICENSE) but [let me know](https://mat.tl) if you do use it as I like to hear about people taking long train rides.
