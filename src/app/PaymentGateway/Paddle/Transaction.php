<?php
declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{


   public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';
    private string $status;

    public function __construct()
    {
        $this->setStatus(self::STATUS_PENDING);
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}






//41
    //private static int $count = 0;

   // public function __construct(
      ////  public float  $amount,
      ////  public string $description
  //  )
  //  {
   ////     self::$count++;

 //   }

   //// public function getCount(): int
    {
    ////    return self::$count;
    }
   //// public function process()
  //  {
   ////     array_map(static function(){
   ////         $this->amount = 25;
   ////         var_dump($this->amount);
   ////     },[]);
   ////     echo 'Processing paddle transaction...';
  //  }
//}


//42

