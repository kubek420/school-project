<?php
    class DBConnect {
        const FETCH = 0;
        const EXEC = 1;
        const CREATE = 2;

        public function execute(string $query_request, int $cmd) {
            $db_connect = [
                'host' => 'localhost',
                'user' => 'kaudekjg',
                'password' => 'Testujehosting123!',
                'database' => 'kaudekjg_ep'
            ];

            try {
                $database = new PDO("mysql:host={$db_connect['host']};dbname={$db_connect['database']}", $db_connect['user'], $db_connect['password'], [PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
                
                $database->query('SET NAMES UTF8');
                $database->query('SET CHARACTER SET UTF8');

                switch ($cmd) {
                    case DBConnect::FETCH: {
                        $query = $database->prepare($query_request);
                        $query->execute();

                        return $query->fetchAll();

                        break;
                    }
                    case DBConnect::EXEC: {
                        $query = $database->prepare($query_request);
                        $query->execute();

                        break;
                    }
                    case DBConnect::CREATE: {
                        $database->exec($query_request);

                        break;
                    }
                }

                $database = null;
            } catch (PDOException $e) {
                #ob_end_clean();

                exit('Database connect error: '.$e->getCode());
            }
        }
    }
