<?php

namespace App\GraphQL\Query;

use App\Task;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use Folklore\GraphQL\Support\Facades\GraphQL;

class TasksQuery extends Query
{
  protected $attributes = [
    'name' => 'tasks'
  ];

  public function type()
  {
    return Type::listOf(GraphQL::type('Task'));
  }

  public function resolve($root, $args)
  {
    return Task::all();
  }
}

