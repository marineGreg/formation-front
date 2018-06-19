import {Component, EventEmitter, OnInit, Output} from '@angular/core';
import {Task} from '../shared/models/task';

@Component({
  selector: 'app-add-task',
  templateUrl: './add-task.component.html',
  styleUrls: ['./add-task.component.css']
})
export class AddTaskComponent implements OnInit {
  /**
   * Permet d'émettre un évènement lors de la création d'une nouvelle tâche.
   * @type {EventEmitter<any>}
   */
  @Output() newTaskEvent = new EventEmitter();

  /**
   * La tâche à créer.
   * @type {Task}
   */
  task: Task = new Task();

  /**
   * Permet de réinitialiser le formulaire.
   * @type {boolean}
   */
  active = true;

  constructor() { }

  ngOnInit() {
  }

  /**
   * Fonction appelée lors de la création d'une tâche.
   */

  addTask() {
    /**
     * Lorsque l'utilisateur soummet sa tâche, j'émets l'évènement avec sa nouvelle tâche.
     */
    this.newTaskEvent.emit(this.task);

    this.task = new Task();
    this.active = false;
    setTimeout(() => this.active = true,0);

  }
}
