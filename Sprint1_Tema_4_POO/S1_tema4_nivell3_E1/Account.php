<?php

class Account {
    private $accountNumber;
    private $clientName;
    private $clientSurname;
    private $balance;
    private $recordDate;
    private $amount;

    public function __construct(string $accountNumber, string $clientName, string $clientSurname, int $balance) {
        $this->accountNumber = $accountNumber;
        $this->clientName = $clientName;
        $this->clientSurname = $clientSurname;
        $this->balance = $balance;
        $this->recordDate = date('Y-m-d H:m:s');
        $this->amount = 0;   
    }

    public function deposit($amount) {
        if (!is_numeric($amount) || $amount <= 0) {
            return "Error: la quantitat ha de ser un número positiu.";
        }
        $this->balance += $amount;
        return "Operació realitzada amb èxit.<br/> El nou saldo és $this->balance.";
    }

    public function withdraw($amount) {
        if (!is_numeric($amount) || $amount <= 0) {
            return "Error: la quantitat ha de ser un número positiu.";
        }
        if ($this->balance < $amount) {
            return "Error: no hi ha prou saldo per realitzar aquesta operació.";
        }
        $this->balance -= $amount;
        return "Operació realitzada amb èxit.<br/> El nou saldo és $this->balance.";
    }

    public function getPerfil() {
        echo "Dades de l'usuari: <br/>";
        echo "- Nª de Compta: ".$this->getAccountNumber()."<br/>";
        echo "- Nom: ".$this->getClientName()."<br/>";
        echo "- Cognom: ".$this->getClientSurname()."<br/>";
        echo "- Saldo Inicial: ".$this->getBalance()."<br/>";
        echo "- Monto: ".$this->getAmount()."<br/>";
        echo "- Saldo Final: ".$this->getBalance()."<br/>";
        echo "- Data de registre: ".$this->recordDate."<br/>";
    }
    
            
    public function nouSaldo(){
        return $this->getBalance();
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
    }

    public function getClientName() {
        return $this->clientName;
    }

    public function setClientName($clientName) {
        $this->clientName = $clientName;
    }

    public function getClientSurname() {
        return $this->clientSurname;
    }

    public function setClientSurname($clientSurname) {
        $this->clientSurname = $clientSurname;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount(int $amount) {
        $this->amount = $amount;
    }
}
?>