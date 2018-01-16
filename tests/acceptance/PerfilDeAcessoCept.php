<?php
class PerfilDeAcessoCept
{
    public function _before(AcceptanceTester $I)
    {
        $I->login('Admin', 'lti1990');
    }

    public function _after( $I)
    {
    }

    public function create(AcceptanceTester $I)
    {
        $I->wantTo('perform actions and see result');
        $I->am('user');
        $I->wantTo('Fazer cadastro de Departamento');
        $I->lookForwardTo('access sisgr cadastro perfil de acesso');
        $I->amOnPage('/perfisacesso/novo');
        $I->click('Salvar');
        $I->see('Sucesso! Cadastro realizado.', '.alert-Success');

    }
}


