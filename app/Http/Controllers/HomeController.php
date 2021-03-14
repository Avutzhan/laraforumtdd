<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * Redis Stuff
         */
        //start connection
        //$redis = Redis::connection();

        //Getters Setters
        //get set done
        //$redis->set('test', 'test-value');
        //$var = $redis->get('test');

        //work with array
        //$redis->set('user_details', json_encode([
        //        'first_name' => 'Alex',
        //        'last_name' => 'Richards'
        //    ])
        //);
        //$response = $redis->get('user_details');
        //$result = json_decode($response);

        //work with array (hash table)
        //$redis->hmset('user_details2',["firstName" => "Foo", "lastName" => "Bar"]); //work with array (hash table)

        //get all
        //$result2 = $redis->hgetall('user_details2');

        //get keys
        //$usersKeys = $redis->hkeys('user_details2');
        //$redis->set('message', 'Hello world');
        //$valueMalue = $redis->get('message');

        //Exists
        //$resultat = $redis->exists('message') ? "Oui" : "please populate the message key";

        //Increment Decrement
        //$redis->set("counter", 0);
        //$redis->incr("counter"); // 1
        //$redis->incr("counter"); // 2
        //$redis->decr("counter"); // 1

        //increment by step
        //$redis->incrby("counter", 15);
        //$redis->decrby("counter", 10); // 10
        //$counter = $redis->get("counter");

        //Work with lists
        //LPUSH RPUSH LPOP RPOP LLEN LRANGE
        //$redis->rpush("languages", "french"); // [french]
        //$redis->rpush("languages", "arabic"); // [french, arabic]
        //$redis->lpush("languages", "english"); // [english, french, arabic]
        //$redis->lpush("languages", "swedish"); // [swedish, english, french, arabic]
        //$redis->lpop("languages"); // [english, french, arabic]
        //$redis->rpop("languages"); // [english, french]
        //$redis->llen("languages"); // 2
        //$list = $redis->lrange("languages", 0, -1); // returns all elements
        //$pist = $redis->lrange("languages", 0, 1); // [english, french]

        //work with hash tables
        //HSET HGET HGETALL HMSET HDEL HINCRBY
        //$key = 'linus torvalds';
        //$redis->hset($key, 'age', 44);
        //$redis->hset($key, 'country', 'finland');
        //$redis->hset($key, 'occupation', 'software engineer');
        //$redis->hset($key, 'reknown', 'linux kernel');
        //$redis->hset($key, 'to delete', 'i will be deleted');
        //$age = $redis->hget($key, 'age'); // 44
        //$country = $redis->hget($key, 'country'); // Finland
        //$redis->del($key, 'to delete');
        //$redis->hincrby($key, 'age', 20); // 64
        //$redis->hmset($key, [
        //    'age' => 44,
        //    'country' => 'finland',
        //    'occupation' => 'software engineer',
        //    'reknown' => 'linux kernel',
        //]);
        //$data = $redis->hgetall($key);

        //work with sets множества
        //SADD SREM SISMEMBER SMEMBERS
        //$key = "countries";
        //$redis->sadd($key, 'china');
        //$redis->sadd($key, ['england', 'france', 'germany']);
        //$redis->sadd($key, 'china'); // игнорируется
        //$redis->srem($key, ['england', 'china']);
        //$redis->sismember($key, 'england'); // false
        //$pembers = $redis->smembers($key); // ['france', 'germany']

        //Работа с упорядоченными множествами
        //Working with ordered sets
        //EXPIRE EXPIREAT TTL PERSIST
        //$key = "expire in 1 hour";
        //$redis->expire($key, 3600); // истечёт через 1 час
        //$redis->expireat($key, time() + 3600); // истечёт через 1 час
        //sleep(600); // имитация пройденного времени
        //$redis->ttl($key); // 3000, истечёт через 50 минут
        //$redis->persist($key); // никогда не истечёт.

        //redis pipeline
        //$redis->pipeline(function ($pipe) {
        //    for ($i = 0; $i < 10; $i++) {
        //        $pipe->set("key:$i", $i);
        //    }
        //});
        //$key1 = $redis->get('key:9');

        /**
         * Memcached Stuff
         */
        //$mc = new \Memcached();

        //connect
        //$mc->addServer("localhost", 11211);

        //get set
        //$mc->set("foo", "Hello!");
        //$var = $mc->get("foo");

        //add
        //$mc->add("foo1", "bar1", 1000);
        //$var = $mc->get("foo1");

        //append
        //$mc->flush(1);
        //$mc->setOption(\Memcached::OPT_COMPRESSION, false);
        //$mc->set('foo', 'bar');
        //$mc->append('foo', 'berber');
        //$var = $mc->get('foo');

        //replace
        //$mc->replace('foo', 'fofo');

        //prepend
        //$mc->prepend('foo', 'bobo');
        //$var = $mc->get('foo');

        //incr decr
        //$mc->set('counter', 0);
        //$mc->increment('counter', 10);
        //$mc->decrement('counter', 5);
        //$counter = $mc->get('counter');

        //delete
        //$mc->delete('foo'); //work

        //flush
        //$mc->flush(1);

        //fetchAll getDelayed Запрашивает несколько записей
        //$mc->set('int', 1);
        //$mc->set('string', 'simple string');
        //$mc->set('array', array(11, 12));

        //$mc->getDelayed(array('int', 'array', 'string'), true);
        //$var1 = $mc->fetchAll();
        
        //dd($var1);

        notify()->success('Laravel Notify is awesome!');

        return view('home');
    }
}
