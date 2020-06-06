<?php

namespace App\Repositories;

use App\Exceptions\BackendValidationException;
use App\Exceptions\QueryException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

abstract class AbstractRepository
{
    /**
     * @var Model|Builder
     */
    public $model;

    /**
     * @param $data
     *
     * @return Model
     * @throws QueryException
     */
    public function create($data)
    {
        try {
            $item = $this->model->query()->create($data);
            return $item;
        } catch (\Illuminate\Database\QueryException $exception) {
            throw new QueryException($exception->getMessage());
        }
    }

    /**
     * @param $idOrModel
     * @param $data
     *
     * @return Model
     *
     * @throws \App\Exceptions\QueryException
     */
    public function update($item, $data)
    {
        try {
            $item->update($data);
            return $item;
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * parameters Must be array
     *
     * @param $data
     * @param $itemIfExist
     *
     * @return Model
     *
     * @throws \App\Exceptions\QueryException
     */
    public function updateOrCreate($itemIfExist, $data)
    {
        try {
            $item = $this->model->query()->updateOrCreate($itemIfExist,$data);
            return $item;
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * Get all records.
     *
     * @param array $filters
     * @param array $with
     * @param bool $returnResults return results collection if true, query object if false
     * @param $orderBy
     * @param $direction
     * @return Collection|Builder
     * @throws QueryException
     */
    public function findAll($filters = [], $with = [], $returnResults = true,$orderBy = 'id',$direction = 'DESC')
    {
        try {
            $query = $this->model->query()
                ->where($filters)
                ->with($with)
                ->orderBy($orderBy, $direction);

            return $returnResults ? $query->get() : $query;
        } catch (\Illuminate\Database\QueryException $exception) {
            dd($exception->getMessage());
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * Get all records Using WhereIn
     *
     * @param array $filters
     * @param array $with
     * @param bool $returnResults return results collection if true, query object if false
     * @param $orderBy
     * @param $direction
     * @return Collection|Builder
     * @throws QueryException
     */
    public function findAllByWhereIn($colummn , $value, $with = [], $returnResults = true,$orderBy = 'id',$direction = 'DESC')
    {
        try {
            $query = $this->model->query()
                ->whereIn($colummn, $value)
                ->with($with)
                ->orderBy($orderBy, $direction);

            return $returnResults ? $query->get() : $query;
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**

     * Get all records Using WhereIn
     *
     * @param array $filters
     * @param array $with
     * @param bool $returnResults return results collection if true, query object if false
     * @param $orderBy
     * @param $direction
     * @return Collection|Builder
     * @throws QueryException
     */
    public function findAllByWhereNotIn($colummn , $value, $with = [], $returnResults = true,$orderBy = 'id',$direction = 'DESC')
    {
        try {
            $query = $this->model->query()
                ->whereNotIn($colummn, $value)
                ->with($with)
                ->orderBy($orderBy, $direction);

            return $returnResults ? $query->get() : $query;
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * Get all records.
     *
     * @param array $filters
     * @param array $with
     * @param bool $returnResults return results collection if true, query object if false
     * @param $orderBy
     * @param $direction
     * @return Collection|Builder
     * @throws QueryException
     */
    public function findAllWithPaging($filters = [], $with = [], $limit = 10, $offset = 0, $returnResults = true,$orderBy = 'id',$direction = 'DESC')
    {
        $limit = isset($limit) ? $limit : 10;
        $offset = isset($offset) ? $offset : 0;
        try {
            $query = $this->model->query()
                ->where($filters)
                ->with($with)
                ->orderBy($orderBy, $direction);

            return $returnResults ? $query->limit($limit)->offset($offset)->get() : $query;
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * Find a record by a specific key.
     *
     * @param array $filters
     * @param array $with
     *
     * @return mixed|static
     * @throws QueryException
     */
    public function findOneBy($filters = [], $with = [])
    {
        try {
            return $this->model->query()->where($filters)->with($with)->first();
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException($exception->getMessage());
        }
    }

    /**
     * Find a record by a specific key of Fail.
     *
     * @param array $filters
     * @param array $with
     *
     * @return Model
     * @throws QueryException
     */
    public function findOneByOrFail($filters = [], $with = [])
    {
        try {
            return $this->model->query()->where($filters)->with($with)->firstOrFail();
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * Delete a record by id.
     *
     * @param $id
     *
     * @return int
     * @throws QueryException
     */
    public function delete($id)
    {
        try {
            return $this->model->destroy($id);
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * @param $idOrModel
     *
     * @return Model
     * @throws QueryException
     */
    protected function getItem($idOrModel)
    {
        try {
            return gettype($idOrModel) == 'object' ? $idOrModel : $this->model->find($idOrModel);
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * @param $data
     * @return Model
     * @throws QueryException
     */
    public function firstOrCreate($data)
    {
        try {
            return $this->model->query()->firstOrCreate($data);
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('something went wrong');
        }
    }

    /**
     * @param $item
     * @param $modelRelation
     * @param $data
     * @return Model
     * @throws QueryException
     */
    public function sync($item,$modelRelation,$data)
    {
        try {
            return $item->$modelRelation()->sync($data);
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

    /**
     * @param $item
     * @param $modelRelation
     * @param $data
     * @return Model
     * @throws QueryException
     */
    public function deleteCollection($filters)
    {
        try {
            return $this->model->where($filters)->delete();
        } catch (\Illuminate\Database\QueryException $exception) {
            Log::debug($exception);
            throw new QueryException('Something went wrong');
        }
    }

}
