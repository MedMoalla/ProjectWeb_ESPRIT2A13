<?php
class ProduitModel
{
    private int $id = 0;
    private string $nom = '';
    private float $prix = 0;
    private int $stock = 0;
    private int $idCategorie = 0;
    private string $categorie = ''; // nom de la catégorie (vient de la jointure)

    public function getId(): int { return $this->id; }
    public function getNom(): string { return $this->nom; }
    public function getPrix(): float { return $this->prix; }
    public function getStock(): int { return $this->stock; }
    public function getIdCategorie(): int { return $this->idCategorie; }
    public function getCategorie(): string { return $this->categorie; }

    public function setId(int $id): void { $this->id = $id; }
    public function setNom(string $nom): void { $this->nom = $nom; }
    public function setPrix(float $prix): void { $this->prix = $prix; }
    public function setStock(int $stock): void { $this->stock = $stock; }
    public function setIdCategorie(int $id): void { $this->idCategorie = $id; }
    public function setCategorie(string $c): void { $this->categorie = $c; }

    public static function fromArray(array $row): self
    {
        $p = new self();
        $p->setId((int) ($row['id_produit'] ?? 0));
        $p->setNom((string) ($row['nom'] ?? ''));
        $p->setPrix((float) ($row['prix'] ?? 0));
        $p->setStock((int) ($row['stock'] ?? 0));
        $p->setIdCategorie((int) ($row['id_categorie'] ?? 0));
        $p->setCategorie((string) ($row['categorie'] ?? ''));
        return $p;
    }
}
