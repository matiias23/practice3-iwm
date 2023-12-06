import { Component, OnInit } from '@angular/core';
import { HomeService } from './home.service';

interface EditableProfile {
  nombre: string;
  carrera: string;
  universidad: string; 
  edad: number;
  ciudadOrigen: string;
  email: string;
  hobbys: Hobby[];
  frameworks: Framework[];

}
interface Hobby {
  id: number;
  pasatiempo: string;
  
}

interface Framework {
  id: number;
  tipo: string;
  herramienta: string;
  
}

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {
  profileData: EditableProfile = {
    nombre: '',
    carrera: '',
    universidad: '',
    edad: 0,
    ciudadOrigen: '',
    email: '',
    hobbys: [],
    frameworks: []
  };
  editMode: boolean = false;

  constructor(private homeService: HomeService) {}

  ngOnInit(): void {
    this.homeService.getProfileData().subscribe((data) => {
      this.profileData = data;
    });
  }

  toggleEditMode() {
    if (this.editMode) {
      // Lógica para guardar los cambios
      this.homeService.editProfile(this.profileData).subscribe(
        (response) => {
          console.log('Cambios guardados exitosamente:', response);
        },
        (error) => {
          console.error('Error al guardar cambios:', error);
        }
      );
    }
    this.editMode = !this.editMode;
  }

}
