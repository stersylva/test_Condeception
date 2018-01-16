<?php
class DepartamentoCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->login('ADMIN', 'lti1990');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function create(AcceptanceTester $I)
    {
        $I->amOnPage('/departamentos/novo');
        $I->seeCurrentUrlEquals('/departamentos/novo');
        $I->fillField('nome', 'Departamento Teste');
        $I->click('Salvar');
        $I->see('Sucesso! Cadastro realizado.', '.alert-success');
    }

    public function createWithoutNome(AcceptanceTester $I)
    {
        $I->amOnPage('/departamentos/novo');
        $I->seeCurrentUrlEquals('/departamentos/novo');
        $I->click('Salvar');
        $I->seeCurrentUrlEquals('/departamentos/novo');
        $I->see('Preencha o campo nome', '.alert-danger');
    }
}
