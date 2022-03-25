<?php
        // src/AppBundle/Entity/User.php

        namespace AppBundle\Entity;

        use FOS\UserBundle\Model\User as BaseUser;
        use Doctrine\ORM\Mapping as ORM;
        use Symfony\Component\Validator\Constraints as Assert;

        /**
         * @ORM\Entity
         * @ORM\Table(name="fos_user")
         */
        class User extends BaseUser
        {
            /**
             * @ORM\Id
             * @ORM\Column(type="integer")
             * @ORM\GeneratedValue(strategy="AUTO")
             */
            protected $id;

            /**
             * @ORM\Column(type="string", length=255)
             *
             * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
             * @Assert\Length(
             *     min=3,
             *     max=255,
             *     minMessage="The name is too short.",
             *     maxMessage="The name is too long.",
             *     groups={"Registration", "Profile"}
             * )
             */
            protected $name;

            /**
             * @ORM\Column(type="string", length=255)
             *
             * @Assert\NotBlank(message="Please enter your surname.", groups={"Registration", "Profile"})
             * @Assert\Length(
             *     min=3,
             *     max=255,
             *     minMessage="The surname is too short.",
             *     maxMessage="The surname is too long.",
             *     groups={"Registration", "Profile"}
             * )
             */
            protected $surname;

            public function __construct()
            {
                parent::__construct();
                // your own logic
            } 

            /**
             * Set $name
             *
             * @param string $name
             *
             * @return User
             */
            public function setName($name)
            {
                $this->name = $name;
                return $this;
            }
            /**
             * Get name
             * 
             * @return string
             */
            public function getName()
            {
                return $this->name;
            }

            
            /**
             * Set $surname
             *
             * @param string $surname
             *
             * @return User
             */
            public function setSurname($surname)
            {
                $this->surname = $surname;
                return $this;
            }
            /**
             * Get surname
             * 
             * @return string
             */
            public function getSurname()
            {
                return $this->surname;
            }
        }
