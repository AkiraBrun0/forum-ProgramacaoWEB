        <?php
        $dtNascimento = strtotime($_POST['dtNascimento']);
        $dtNascimento = date('m/d', $dtNascimento);

        $xml = simplexml_load_file(__DIR__ . '/signos.xml');

        $signoUsuario = [];

        foreach ($xml->signo as $signo) {
                $compararData = compararData($signo->dataInicio, $signo->dataFim, $dtNascimento);

                if ($compararData) {
                        $signoUsuario = [
                                'nome' => $signo->signoNome,
                                'descricao' => $signo->descricao,
                                'dataInicio' => $signo->dataInicio,
                                'dataFim' => $signo->dataFim,
                        ];
                }
        }

        function compararData(string $dataInicio, string $dataFim, string $dtNascimento): bool
        {
                $dtNascimento = strtotime($dtNascimento);
                $dataInicio = converterDataSigno($dataInicio);
                $dataFim = converterDataSigno($dataFim);

                //Variáveis que armazenam comparação entre duas datas
                $condInicio = $dtNascimento >= $dataInicio;
                $condFinal = $dtNascimento <= $dataFim;

                $retorno = false;

                //Capricórnio, único signo com data de início maior que a data final
                if ($dataInicio > $dataFim) {
                        $retorno = $condInicio || $condFinal;
                } else {
                        //condicional é a padrão para todos os outros signos
                        $retorno = $condInicio && $condFinal;
                }
                return $retorno;
        }
        // Função que recebe uma data no formato de string com "d/m" e converte para "m/d" retornando um int de strtotime
        function converterDataSigno(string $date): int
        {
                $exDate = explode('/', $date);
                $invertDate = $exDate[1] . '/' . $exDate[0];
                return strtotime($invertDate);
        }

        include 'mostrar-signo.php';
        ?>