import { Injectable } from '@angular/core';
import {Task} from '../models/task';
import {a} from '@angular/core/src/render3';

@Injectable({
  providedIn: 'root'
})
export class TaskStorageService {

  constructor() { }

  // -- Récupérer la liste des tâches
  getTasks(): any {
    /**
     * Avant de retourner les données, je m'assure qu'il y a bien des données dans le localStorage.
     * S'il n'y a pas de données, je retourne un tableau vide..
     * @type {any}
     */
    const tasks = JSON.parse(localStorage.getItem('tasks'));
    if ( null !== tasks ) {
      return tasks;
    } else {
      return [];
    }
  }

  // -- Sauvegarder les tâches
  save(tasks: Task[]) {
    localStorage.setItem( 'tasks', JSON.stringify(tasks) );
  }

}
