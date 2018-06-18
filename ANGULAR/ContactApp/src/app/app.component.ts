/**
 * Pour déclarer une classe comme composant de notre application, on importe "Component" via @angular/core.
 */
import {Component, OnInit} from '@angular/core';
import {Contact} from './shared/models/contact';
import {UserApiService} from './shared/services/user/user-api.service';

/**
 * @Component est ce qu'on appelle un décorateur.
 * Il va nous permettre de définir 3 paramètres essentiels à notre application...
 */
@Component({
  /**
   * Le sélecteur (selector) détermine la manière dont le composant sera affiché dans notre HTML : <app-root></app-root>.
   * Vous devez OBLIGATOIREMENT avoir la balise d'ouverture et de fermeture !
   */
  selector: 'app-root',
  /**
   * "templateUrl" ou "template" est la partie visible du composant. C'est ce qui s'affiche à l'écran lorsque
   * le composant est utilisé.
   */
  templateUrl: './app.component.html',
  /**
   * La déclaration des Styles avec "styleUrls" ou "styles[]"
   */
  styleUrls: ['./app.component.css'],
  /*template: `
    <h1>Bienvenue à Paris IV !</h1>
    <h3>Les meilleurs à RISK et PUBG...</h3>
    <p>Les apprenants sont entrain de souffrir avec Hugo !</p>
  `,
  styles: [`
    h1 {
      color: blue;
    }
  `]*/
})

/**
 * La classe contient les données du composant mais aussi son comportement.
 * Dans notre contexte MVVM, notre classe correspond au ViewModel.
 */
export class AppComponent implements OnInit {

  constructor(private userApiService: UserApiService) {}

  ngOnInit(): void {
    this.userApiService.getUsers().subscribe(
      contacts => {
        console.log(contacts);
        this.mesContacts = contacts;
      }
    );
  }


// -- Déclaration d'une variable titre
  title = 'Contact App';

  // -- Contact choisi par mon utilisateur
  contactActif: Contact;

  // -- Déclaration d'un Objet Contact
  unContact = {
    id: 1,
    name: 'Marine GREGOIRE',
    username: 'marineGreg',
    email: 'marinegregoire1@gmail.com'
  };

  // -- Tableau de Contacts
  mesContacts: Contact[] = [
    {
      id      : 1,
      name    : 'Marine GREGOIRE',
      username: 'marineGreg',
      email   : 'marinegregoire1@gmail.com'
    },
    {
      id      : 2,
      name    : 'Robin TOURNIER',
      username: 'robintournier',
      email   : 'robin.t@hl-media.fr'
    },
    {
      id      : 3,
      name    : 'Riki NDINGA',
      username: 'rikindinga',
      email   : 'riki.n@hl-media.fr'
    },
    {
      id      : 4,
      name    : 'Julien CALCERRADA',
      username: 'juliencalcerrada',
      email   : 'julien.c@hl-media.fr'
    }
  ];

  /**
   * Ma fonction displayContact prend un Contact en paramètre et le transmet à la variable contactActif
   * @param {Contact} contactCliqueParMonUtiliateur
   */
  displayContact(contactCliqueParMonUtiliateur: Contact) {
    this.contactActif = contactCliqueParMonUtiliateur;
    console.log(this.contactActif);
  }

  /**
   * Fonction qui permet de rajouter un nouveau contact dans la liste
   * @param event
   */
  ajouterContactDansListe(event: any) {
    // -- Aperçu dans la console
    console.log(event);

    // -- Récupération du Contact dans l'évènement
    const leContact: Contact = event.leContact;

    // -- Ajout du Contact dans le tableau
    this.mesContacts.push(leContact);
  }


}
