import {Component, OnInit} from '@angular/core';
import {Task} from './shared/models/task';
import {TaskStorageService} from './shared/services/task-storage.service';
import * as _ from 'lodash';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {

  constructor(private taskStorageService: TaskStorageService) {

  }
  /**
   * On déclare notre tableau de tâches
   */
  tasks: Task[] = [];

  ngOnInit(): void {
    /**
     * Au chargement de l'application, je récupère les tâches dans le localStorage.
     * @type {any}
     */
    this.tasks = this.taskStorageService.getTasks();
  }

  /**
   * Cette fonction se déclenche dans l'application lorsqu'une nouvelle tâche est créée par l'utilisateur dans le composant app-addTask
   * @param {Task} task
   */
  newTask(task: Task) {
    console.log(task);
    /**
     * On ajoute la nouvelle tâche dans le tableau de tâches.
     * Et on sauvegarde nos tâches dans le storage.
     */
    this.tasks.push(task);
    this.taskStorageService.save(this.tasks);

  }

  /**
   * L'utilisateur vient de terminer une tâche.
   * @param {Task} task
   */
  taskIsDone(task: Task) {
    /**
     * Je passe la tâche de l'utilisateur à true.
     * Et je sauvegarde toutes les tâches.
     */
    task.status = true;
    this.taskStorageService.save(this.tasks);
  }

  removeTask(task: Task) {
    _.pullAllWith( this.tasks, [task], _.isEqual );
    this.taskStorageService.save(this.tasks);
  }
}
