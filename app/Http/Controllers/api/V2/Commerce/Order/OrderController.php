<?php

namespace App\Http\Controllers\Api\V2\Commerce\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Commerce\Order\CreateOrderRequest;
use App\Http\Requests\V2\Commerce\Order\UpdateOrderRequest;
use App\Http\Resources\V2\Commerce\Order\OrderResource;
use App\Interfaces\Repositories\V2\Commerce\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    function __construct(
    protected OrderRepositoryInterface $orderRepository
    )
    {

    }


    public function createNewOrder(CreateOrderRequest $request)
    {
        $validated_data = $request->validated();
        if(!$created = $this->orderRepository->create($validated_data))
        {
            return respondError(400, '01', 'An error occurred while creating order');
        }
        return respondSuccess('Order Created Successfully', new OrderResource($created));
    }

    public function getAllOrder()
    {
        $id = auth()->id();
        if(!$order = $this->orderRepository->get($id))
        {
            return respondError(400, '01', 'An error occurred while fetching order');
        }
        return respondSuccess('Order Fetched Successfully', OrderResource::collection($order));
    }

    public function getOrderById(string $id)
    {
        if(!$order = $this->orderRepository->getOrderById($id))
        {
            return respondError(400, '01', 'An error occurred while fetching order');
        }
        return respondSuccess('Order Fetched Successfully', new OrderResource($order));
    }

    public function updateOrder(UpdateOrderRequest $request, string $id)
    {
        $validated_data = $request->validated();
        if(!$updated = $this->orderRepository->update($id, $validated_data))
        {
            return respondError(400, '01', 'An error occurred while updating order');
        }
        return respondSuccess('Order Updated Successfully', new OrderResource($updated));
    }
}
