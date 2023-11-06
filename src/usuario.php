<?php
use Doctrine\ORM\Mapping as ORM;

require_once __DIR__ . "/bootstrap.php";

/**
 * @ORM\Entity
 * @ORM\Table(name="tb_usuario")
 */
class Usuario{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="ID_PK_USUARIO")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	public int $id;

	/**
	 * @ORM\Column(type="string", name="EMAIL")
	 */
	public string $email;

	/**
	 * @ORM\Column(type="string", name="SENHA")
	 */
	public string $senha;
}