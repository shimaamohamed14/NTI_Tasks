<?php
trait Timestampable {
    public function currentTimestamp(){
        return date ('Y-m-d H:i:s') ;
    }
}
class Order {
    use Timestampable ;
}
class Invoice {
    use Timestampable ;
}
$order=new Order ();
 echo $order->currentTimestamp()."<br>" ;
$invoice=new Invoice ();
 echo $invoice->currentTimestamp() ;