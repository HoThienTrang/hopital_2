<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exceptions\NotFoundException;
use App\Exceptions\UnknowException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class HandlerController extends Controller
{
    public function result()
    {
        return $this->compacts['result'] = [
            'status' => true,
        ];
    }

    public function doAction(callable $callback)
    {
        DB::beginTransaction();
        try {
            if (is_callable($callback)) {
                call_user_func($callback);
            }

            DB::commit();
        } catch (NotFoundException $e) {
            activity()->log($e->getMessage());
            DB::rollBack();

            throw new NotFoundException($e->getMessage(), $e->getCode());
        } catch (UnknowException $e) {
            activity()->log($e->getMessage());
            DB::rollBack();

            throw new UnknowException($e->getMessage(), $e->getCode());
        } catch (ModelNotFoundException $e) {
            activity()->log($e->getMessage());
            DB::rollBack();

            throw new ModelNotFoundException($e->getMessage(), $e->getCode());
        }

        return $this->result();
    }

    public function getData(callable $callback)
    {
        try {
            if (is_callable($callback)) {
                call_user_func($callback);
            }
        } catch (Exception $e) {
            activity()->log($e->getMessage());
        }

        return $this->result();
    }
}
