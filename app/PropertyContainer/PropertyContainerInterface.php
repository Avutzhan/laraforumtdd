<?php


namespace App\PropertyContainer;


interface PropertyContainerInterface
{
    function addProperty($propertyName, $value);

    function deleteProperty($propertyName);

    function getProperty($propertyName);

    function setProperty($propertyName, $value);

}