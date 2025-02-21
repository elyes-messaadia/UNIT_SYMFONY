<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: 'App\Repository\UserRepository')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"id_user", type:"integer")]
    private $id;

    #[ORM\Column(name:"pseudo_user", type:"string", length:180)]
    private $pseudoUser;

    #[ORM\Column(name:"mail_user", type:"string", length:180, unique:true)]
    private $mailUser;

    #[ORM\Column(name:"password_user", type:"string")]
    private $passwordUser;

    // Relation ManyToOne vers Role
    #[ORM\ManyToOne(targetEntity: Role::class, inversedBy:"users")]
    #[ORM\JoinColumn(name:"id_role", referencedColumnName:"id_role", nullable:false)]
    private $role;

    // Getters et setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudoUser(): ?string
    {
        return $this->pseudoUser;
    }

    public function setPseudoUser(string $pseudoUser): self
    {
        $this->pseudoUser = $pseudoUser;
        return $this;
    }

    public function getMailUser(): ?string
    {
        return $this->mailUser;
    }

    public function setMailUser(string $mailUser): self
    {
        $this->mailUser = $mailUser;
        return $this;
    }

    public function getPasswordUser(): string
    {
        return $this->passwordUser;
    }

    public function setPasswordUser(string $passwordUser): self
    {
        $this->passwordUser = $passwordUser;
        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;
        return $this;
    }

    // Méthodes obligatoires pour l'interface UserInterface

    public function getRoles(): array
    {
        // Vous pouvez adapter en fonction de la logique de votre application
        return ['ROLE_USER'];
    }

    public function getPassword(): string
    {
        return $this->passwordUser;
    }

    public function getUserIdentifier(): string
    {
        return $this->mailUser;
    }

    public function eraseCredentials(): void
    {
        // Si vous stockez temporairement des données sensibles, nettoyez-les ici.
    }
}
