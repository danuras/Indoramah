<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderFlow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderFlowApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'value' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:2048|ratio:1/1',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $file = $request->file('icon');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/order_flows/icon/'), $filename);
        $icon = 'images/order_flows/icon/' . $filename;

        $order_flow = OrderFlow::create([
            'value' => $request->value,
            'icon' => $icon,
        ]);
        if ($order_flow) {
            return $this->successResponse($order_flow);
        }
        return $this->failResponse(null);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'value' => 'required',
            'icon' => 'image|mimes:jpeg,png,jpg|max:2048|ratio:1/1',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $order_flow = OrderFlow::first();
        $icon = null;
        if ($request->file('icon')) {
            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/order_flows/icon/'), $filename);
            $icon = 'images/order_flows/icon/' . $filename;
        }
        $order_flow->value = $request->value;
        if ($icon) {
            $order_flow->icon = $icon;
        }
        if ($order_flow->save() || !$order_flow->isDirty()) {
            return $this->successResponse($order_flow);
        }
        return $this->failResponse(null);
    }

    public function delete($id)
    {
        $order_flow = OrderFlow::find($id);
        if ($order_flow->delete()) {
            return $this->successResponse($order_flow);
        }
        return $this->failResponse(null);
    }

    public function show()
    {
        $order_flows = OrderFlow::get();
        return $this->successResponse($order_flows);
    }
}
