<?php
/**
 * Faire héritage de User
 * Ajouter les attributs suivants :
 *  - Numéro d'identification national : nationalTeacherId
 *  - Dans un tableau associatif : les matières que le teacher peut enseigner avec une note de maitrise
 *  allant de 0 à 5 -> Exemple : PHP => 5 ( lessonSubjects)
 *  - Premier étudiant formé -> Relation avec student -> firstStudent
 *
 * Méthode permettant d'obtenir la moyenne de maitrise du teacher -> getAvgLessonCapacity()
 */
class Teacher extends User
{
    protected string $nationalTeacherId;
    protected array $lessonSubjects;
    protected ?Student $firstStudent;

    public function __construct(
        string $firstName,
        string $lastName,
        int $age,
        string $email,
        array $lessonSubjects = [],
        ?Student $firstStudent = null,
        ?string $gender = null,
    )
    {
        parent::__construct($firstName, $lastName, $age, $email, $gender);
        $this->nationalTeacherId = uniqid();
        $this->lessonSubjects = $lessonSubjects;
        $this->firstStudent = $firstStudent;
    }

    /**
     * @return string
     */
    public function getNationalTeacherId(): string
    {
        return $this->nationalTeacherId;
    }

    /**
     * @param string $nationalTeacherId
     */
    public function setNationalTeacherId(string $nationalTeacherId): void
    {
        $this->nationalTeacherId = $nationalTeacherId;
    }

    /**
     * @return array
     */
    public function getLessonSubjects(): array
    {
        return $this->lessonSubjects;
    }

    /**
     * @param array $lessonSubjects
     */
    public function setLessonSubjects(array $lessonSubjects): void
    {
        $this->lessonSubjects = $lessonSubjects;
    }

    public function addLessonSubject(string $lessonName, int $level): void
    {
        if($level < 0) {
            $level = 0;
        } elseif ($level > 5) {
            $level = 5;
        }

        $this->lessonSubjects[$lessonName] = $level;
    }

    public function removeLessonSubject(string $lessonName): void
    {
        unset($this->lessonSubjects[$lessonName]);
    }

    public function getAvgLessonCapacity(): float
    {
        return array_sum($this->lessonSubjects)/ count($this->lessonSubjects);
    }

    /**
     * @return Student|null
     */
    public function getFirstStudent(): ?Student
    {
        return $this->firstStudent;
    }

    /**
     * @param Student|null $firstStudent
     */
    public function setFirstStudent(?Student $firstStudent): void
    {
        $this->firstStudent = $firstStudent;
    }
}