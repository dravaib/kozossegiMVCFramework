<?php

namespace App;

use Carbon\Carbon;
use Library\BaseController;
use Library\Request;

/**
 * A Feladat: SSADM terv elkészítése Közösségi weboldalhoz
 * Felhasználók regisztrálása, profilok létrehozása
 * Fényképek feltöltése, megjegyzés hozzáfűzése
 * Ismerősök bejelölése, ismeretség visszaigazolása
 * Üzenet küldése ismerősöknek
 * Klubok, csoportok alapítása
 * Klubok tagjainak létszáma
 * Ismeretlen tagok ajánlása ismerősnek közös ismerősök alapján
 * Névnaposok, születésnaposok az adott hónapban
 * Klubok ajánlása, ahol van közös ismerős
 * Ismerősök ajánlása munkahely, vagy iskola alapján
 * Üzenetek küldése, fogadása
 *
 *
 * FONTOS:
 * Fényképek feltöltése, kommentelése
 * A profilképem fül hasonló a profilomhoz, ott lehet szerkeszteni, kommentelni
 * Klubokon belül két gomb: klubba belépés vagy elhagyés és saját klubjaim, továbbá új klubok alapítása
 * üzenetek küldése ? nem biztos
 */
class Controller extends BaseController
{
    public function boot()
    {
        $this->model->fixSequences();
    }
}