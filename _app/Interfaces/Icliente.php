<?php

#Interface Cliente

interface ICliente
{

    function setEndCobranca($enderecoCobranca);
    function getEndCobranca();

    function setClassificacao($valor);
    function getClassificacao();

}