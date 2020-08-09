<?php

require_once('index.php');

echo "mili";

$query = <<<'GRAPHQL'
query GetUser($user: String!) {
   user (login: $user) {
    name
    email
    repositoriesContributedTo {
      totalCount
    }
  }
}
GRAPHQL;

graphql_query('https://api.github.com/graphql', $query, ['user' => 'dunglas'], 'my-oauth-token');


?>