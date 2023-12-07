import sys,random
import pygame


class Jeu:
    # contenir toutes les variables ainsi que les fonctions utiles pour le bon deroulement du jeu

    def __init__(self):
        """

        :rtype: object
        """
        self.ecran = pygame.display.set_mode((800, 600))# defini la resoultion de la fenetre ,tuple(longueur,largeur)

        pygame.display.set_caption('Jeu Snake')# attribue un titre a la fenetre
        self.jeu_encours = True

        # creer les variables de position et de direction du serpent
        self.serpent_position_x = 300
        self.serpent_position_y = 300
        self.serpent_direction_x = 0
        self.serpent_direction_y = 0
        self.serpent_corps = 10

        # cree la position pour la pomme

        self.pomme_position_x = random.randrange(110,690,10)
        self.pomme_position_y = random.randrange(110,590,10)
        self.pomme = 10
        # fixer les fps
        self.clock = pygame.time.Clock()

        #creer une liste qui rescence toutes les positions du serpent
        self.positions_serpent = []

        # creer la variable en rapport avec la taille du serpent
        self.taille_du_serpent = 1

        self.ecran_du_debut = True

        self.image_tete_serpent = pygame.image.load('la_tete_du_serpent.png')


        # Charger l'image

        self.image = pygame.image.load('snake-game.jpg')
        # retrecir l'image
        self.image_titre = pygame.transform.scale(self.image,(200,100))

        # creer la variable score


        self.score = 0

    def fonction_principale(self):

        # permet de gerer les evenements , d'afficher certains composants du jeu grace au while loop

        while self.ecran_du_debut:

            for evenement in pygame.event.get():# verifier les evenements lorsque le jeu est en cours
                #print(evenement)
                if evenement.type == pygame.QUIT:
                    sys.exit()

                if evenement.type == pygame.KEYDOWN:
                    if evenement.key == pygame.K_RETURN:

                        self.ecran_du_debut = False

                self.ecran.fill((0,0,0))

                self.ecran.blit(self.image_titre,(300,50,100,50))
                #self.creer_message('petite','Snake',(300,300,100,50),(255,255,255))
                self.creer_message('petite','Le but du jeu est que le serpent se développe '
                                    , (250, 200, 200, 5), (240, 240, 240))
                self.creer_message('petite',' pour cela , il a besoin de pomme ,mangez-en autant que possible !!',
                                    (190, 220, 200, 5), (240, 240, 240))
                self.creer_message('moyenne','Appuyer sur Enter pour commencer', (200, 450, 200, 5),
                                    (255, 255, 255))

                pygame.display.flip()




        while self.jeu_encours:

            # creer un while loop pour creer l'ecran de debut /events /afficher l'image ...

            for evenement in pygame.event.get():# verifier les evenements lorsque le jeu est en cours
                #print(evenement)
                if evenement.type == pygame.QUIT:
                    sys.exit()

                # creer les evenements qui permettent de bouger le serpent

                if evenement.type == pygame.KEYDOWN:

                    if evenement.key == pygame.K_RIGHT:
                        # lorsque l'on presse la touche 'fleche droite'
                        self.serpent_direction_x = 10
                        self.serpent_direction_y = 0
                        #print('Droite')

                    if evenement.key == pygame.K_LEFT:
                        # lorsque l'on presse la touche 'fleche gauche'

                        self.serpent_direction_x = -10
                        self.serpent_direction_y = 0
                        #print('LEFT')

                    if evenement.key == pygame.K_DOWN:
                        # lorsque l'on presse la touche 'fleche vers le  bas'

                        self.serpent_direction_y = 10
                        self.serpent_direction_x = 0
                        #print('En bas')

                    if evenement.key == pygame.K_UP:
                        # lorsque l'on presse la touche 'fleche vers le haut'

                        self.serpent_direction_y = -10
                        self.serpent_direction_x = 0
                        #print('En haut ')



            # faire bouger le serpent si il se trouve dans les limites du jeu

            if self.serpent_position_x <= 100 or self.serpent_position_x >= 700 \
                or self.serpent_position_y <= 100 or self.serpent_position_y >= 600 :
                # si la position du serpent depasse les limites alors le jeu s'arrete
                sys.exit()




            self.serpent_mouvement()

            # cree la cond si le serpent mange la pomme

            if self.pomme_position_y == self.serpent_position_y and self.serpent_position_x == self.pomme_position_x:

                print('ok')

                self.pomme_position_x = random.randrange(110,690,10)
                self.pomme_position_y = random.randrange(110,590,10)

                # augmenter la taille du serpent

                self.taille_du_serpent += 1
                #augmenter le score
                self.score += 1

            # creer une liste pour les qui stocke la position de la tete du serpent
            la_tete_du_serpent = []
            la_tete_du_serpent.append(self.serpent_position_x)
            la_tete_du_serpent.append(self.serpent_position_y)


            # append dans la liste des positions du serpent

            self.positions_serpent.append(la_tete_du_serpent)

            # cond pour resoudre le probleme des positions du serpent avec la taille du serpent
            if len(self.positions_serpent) > self.taille_du_serpent:

                self.positions_serpent.pop(0)
                print(self.positions_serpent)


            self.afficher_les_elements()
            self.se_mord(la_tete_du_serpent)

            self.creer_message('grande','Snake Game', (320, 10, 100, 50), (255, 255, 255), )
            self.creer_message('grande','{}'.format(str(self.score)), (375, 50, 50, 50), (255, 255, 255), )

            # afficher les limites
            self.creer_limites()
            self.clock.tick(30)

            pygame.display.flip()# mettre a jour l'ecran


    # creer une fonction qui permet de creer un rectangle qui representera les limites du jeu (dimension 100,100,600,500),3


    def creer_limites(self):
        # afficher les limites du jeu

        pygame.draw.rect(self.ecran,(255,255,255),(100,100,600,500),3)

    def serpent_mouvement(self):

        # faire bouger le serpent

        self.serpent_position_x += self.serpent_direction_x  # faire bouger le serpent a gauche ou a droite
        self.serpent_position_y += self.serpent_direction_y  # faire bouger le serpent en haut ou en bas

        # print(self.serpent_position_x,self.serpent_position_y)


    def afficher_les_elements(self):

        self.ecran.fill((0, 0, 0))  # attriubue la couleur noir a l'ecran

        # Afficher le serpent
        #pygame.draw.rect(self.ecran, (0, 255, 0), (self.serpent_position_x, self.serpent_position_y,
                                                   #self.serpent_corps, self.serpent_corps))

        self.ecran.blit(self.image_tete_serpent,(self.serpent_position_x,self.serpent_position_y,
                                                 self.serpent_corps,self.serpent_corps))

        # afficher la pomme
        pygame.draw.rect(self.ecran, (255, 0, 0),
                         (self.pomme_position_x, self.pomme_position_y, self.pomme, self.pomme))

        self.afficher_Serpent()


    def afficher_Serpent(self):
        # afficher les autres parties du serpent

        for partie_du_serpent in self.positions_serpent[:-1]:
            pygame.draw.rect(self.ecran, (0, 255, 0),
                             (partie_du_serpent[0], partie_du_serpent[1], self.serpent_corps, self.serpent_corps))

    def se_mord(self,tete_serpent):


        # le seprent se mord

        for partie_serpent in self.positions_serpent[:-1]:
            if partie_serpent == tete_serpent :
                sys.exit()
# creer une fonction qui permet d'afficher des messages

    def creer_message(self,font,message,message_rectangle,couleur):

        if font == 'petite':
            font = pygame.font.SysFont('Lato',20,False)

        elif font == 'moyenne':
            font = pygame.font.SysFont('Lato',30,False)

        elif font == 'grande':
            font = pygame.font.SysFont('Lato',40,True)

        message = font.render(message,True,couleur)

        self.ecran.blit(message,message_rectangle)












# creer une fonction qui permet d'afficher les messages



if __name__ == '__main__':

    pygame.init()# initie pygame
    Jeu().fonction_principale()
    pygame.quit()# quitte pygame