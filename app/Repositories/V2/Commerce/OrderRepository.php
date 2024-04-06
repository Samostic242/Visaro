<?php

namespace App\Repositories\V2\Commerce;
use App\Interfaces\Repositories\V2\Commerce\OrderRepositoryInterface;
use App\Models\Commerce\Order;
use Carbon\Carbon;

class OrderRepository implements OrderRepositoryInterface
{
    public function getOrderByMerchantId($id)
    {
        return Order::where('merchant_id', $id)->get();
    }

    public function findOrderById($id)
    {
        return Order::find($id);
    }

    public function create(array $data)
    {
        $order = new Order();
        $order->public_id = uuid();
        $order->transaction_id = $data['transaction_id'] ?? null;
        $order->invoice_id = $data['invoice_id'] ?? null;
        $order->merchant_id = $data['merchant_id'] ?? null;
        $order->user_id = $data['user_id'] ?? null;
        $order->store_front_id = $data['store_front_id'] ?? null;
        $order->save();
        return $order;
    }

    public function get(string $id)
    {

        $merchantOrders = $this->getOrderByMerchantId($id);
        return $merchantOrders;
    }

    public function getOrderById(string $id)
    {
        $orders = $this->findOrderById($id);
        return $orders;
    }

    public function update(string $id, array $data)
    {
        $order = $this->findOrderById($id);
        if(!$order)
        {
            return false;
        }
        $order->status = $data['status'] ?? $order->status;
        $order->active = $data['active'] ?? $order->active;
        $order->save();
        return $order;
    }

   /*  public function fulfilledOrder(string $id)
    {
        $order = $this->findOrderById($id);
        if(!$order)
        {
            return [
                'status' => false,
                'message' => 'Order Not Found',
                'code' => 404,
                'data' => null
            ];
        }elseif($order->satisfied_at != NULL)
        {
            return [
                'status' => false,
                'message' => 'Order Has Already Been Satisfied',
                'code' => 400,
                'data' => null
            ];
        }
        $order->satisfied_at = Carbon::now();
        $order->save();
        return [
            'status' => true,
            'message' => 'Order Satisfied Successfully',
            'code' => 200,
            'data' => null
        ];
    } */

}
