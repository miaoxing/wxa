<?php

namespace Miaoxing\WechatMp\Service;

class WechatMpUserModel
{
    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see WechatMpUserModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see WechatMpUserModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Returns the success result with model data
     *
     * @param array $merge
     * @return Ret
     * @see WechatMpUserModel::toRet
     */
    public static function toRet(array $merge = []): \Wei\Ret
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see WechatMpUserModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see WechatMpUserModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see WechatMpUserModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see WechatMpUserModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see WechatMpUserModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see WechatMpUserModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see WechatMpUserModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see WechatMpUserModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see WechatMpUserModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see WechatMpUserModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpUserModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see WechatMpUserModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpUserModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see WechatMpUserModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes, $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see WechatMpUserModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see WechatMpUserModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see WechatMpUserModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpUserModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see WechatMpUserModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see WechatMpUserModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see WechatMpUserModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see WechatMpUserModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see WechatMpUserModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see WechatMpUserModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see WechatMpUserModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see WechatMpUserModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see WechatMpUserModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see WechatMpUserModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see WechatMpUserModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see WechatMpUserModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see WechatMpUserModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see WechatMpUserModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see WechatMpUserModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see WechatMpUserModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see WechatMpUserModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see WechatMpUserModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see WechatMpUserModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see WechatMpUserModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see WechatMpUserModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see WechatMpUserModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpUserModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpUserModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpUserModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param scalar $expression
     * @param mixed $params
     * @return $this
     * @see WechatMpUserModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpUserModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpUserModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpUserModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpUserModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see WechatMpUserModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see WechatMpUserModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see WechatMpUserModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see WechatMpUserModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see WechatMpUserModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see WechatMpUserModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see WechatMpUserModel::orderBy
     */
    public static function orderBy(string $column, $order = 'ASC'): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see WechatMpUserModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see WechatMpUserModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see WechatMpUserModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see WechatMpUserModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see WechatMpUserModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see WechatMpUserModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see WechatMpUserModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see WechatMpUserModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see WechatMpUserModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see WechatMpUserModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpUserModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpUserModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpUserModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see WechatMpUserModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }
}

class WxaUrl
{
}

namespace Miaoxing\WechatMp\Service;

if (0) {
class WechatMpUserModel
{
    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see WechatMpUserModel::saveAttributes
     */
    public function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see WechatMpUserModel::toArray
     */
    public function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Returns the success result with model data
     *
     * @param array $merge
     * @return Ret
     * @see WechatMpUserModel::toRet
     */
    public function toRet(array $merge = []): \Wei\Ret
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see WechatMpUserModel::getTable
     */
    public function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see WechatMpUserModel::fromArray
     */
    public function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see WechatMpUserModel::save
     */
    public function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see WechatMpUserModel::destroy
     */
    public function destroy($id = null): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see WechatMpUserModel::set
     */
    public function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see WechatMpUserModel::find
     */
    public function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see WechatMpUserModel::findOrFail
     */
    public function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see WechatMpUserModel::findOrInit
     */
    public function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see WechatMpUserModel::findOrCreate
     */
    public function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see WechatMpUserModel::findByOrCreate
     */
    public function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpUserModel::findAll
     */
    public function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see WechatMpUserModel::findBy
     */
    public function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpUserModel::findAllBy
     */
    public function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see WechatMpUserModel::findOrInitBy
     */
    public function findOrInitBy(array $attributes, $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see WechatMpUserModel::findByOrFail
     */
    public function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see WechatMpUserModel::findFromReq
     */
    public function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see WechatMpUserModel::first
     */
    public function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see WechatMpUserModel::all
     */
    public function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::indexBy
     */
    public function indexBy(string $column): self
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see WechatMpUserModel::unscoped
     */
    public function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see WechatMpUserModel::setCacheTime
     */
    public function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see WechatMpUserModel::getColumns
     */
    public function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see WechatMpUserModel::hasColumn
     */
    public function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see WechatMpUserModel::fetch
     */
    public function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see WechatMpUserModel::fetchAll
     */
    public function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see WechatMpUserModel::pluck
     */
    public function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see WechatMpUserModel::chunk
     */
    public function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see WechatMpUserModel::cnt
     */
    public function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see WechatMpUserModel::max
     */
    public function max(string $column): ?string
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see WechatMpUserModel::update
     */
    public function update($set = [], $value = null): int
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see WechatMpUserModel::delete
     */
    public function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see WechatMpUserModel::offset
     */
    public function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see WechatMpUserModel::limit
     */
    public function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see WechatMpUserModel::page
     */
    public function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see WechatMpUserModel::select
     */
    public function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see WechatMpUserModel::selectDistinct
     */
    public function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see WechatMpUserModel::selectRaw
     */
    public function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see WechatMpUserModel::selectExcept
     */
    public function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::selectMain
     */
    public function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see WechatMpUserModel::from
     */
    public function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see WechatMpUserModel::table
     */
    public function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see WechatMpUserModel::join
     */
    public function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpUserModel::innerJoin
     */
    public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
    {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpUserModel::leftJoin
     */
    public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
    {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see WechatMpUserModel::rightJoin
     */
    public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
    {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::where
     */
    public function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param scalar $expression
     * @param mixed $params
     * @return $this
     * @see WechatMpUserModel::whereRaw
     */
    public function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpUserModel::whereBetween
     */
    public function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpUserModel::whereNotBetween
     */
    public function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpUserModel::whereIn
     */
    public function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see WechatMpUserModel::whereNotIn
     */
    public function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::whereNull
     */
    public function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::whereNotNull
     */
    public function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereDate
     */
    public function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereMonth
     */
    public function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereDay
     */
    public function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereYear
     */
    public function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see WechatMpUserModel::whereTime
     */
    public function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see WechatMpUserModel::whereColumn
     */
    public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see WechatMpUserModel::whereContains
     */
    public function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see WechatMpUserModel::whereNotContains
     */
    public function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see WechatMpUserModel::whereHas
     */
    public function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see WechatMpUserModel::whereNotHas
     */
    public function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see WechatMpUserModel::groupBy
     */
    public function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see WechatMpUserModel::having
     */
    public function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see WechatMpUserModel::orderBy
     */
    public function orderBy(string $column, $order = 'ASC'): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see WechatMpUserModel::desc
     */
    public function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see WechatMpUserModel::asc
     */
    public function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see WechatMpUserModel::forUpdate
     */
    public function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see WechatMpUserModel::forShare
     */
    public function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see WechatMpUserModel::lock
     */
    public function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see WechatMpUserModel::when
     */
    public function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see WechatMpUserModel::unless
     */
    public function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see WechatMpUserModel::setDbKeyConverter
     */
    public function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see WechatMpUserModel::setPhpKeyConverter
     */
    public function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see WechatMpUserModel::joinRelation
     */
    public function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpUserModel::innerJoinRelation
     */
    public function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpUserModel::leftJoinRelation
     */
    public function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see WechatMpUserModel::rightJoinRelation
     */
    public function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see WechatMpUserModel::isRelation
     */
    public function isRelation(string $method): bool
    {
    }
}

class WxaUrl
{
}
}
