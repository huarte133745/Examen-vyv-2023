# examen-vyv-2023
Repositorio para el examen de verificación y validación del software 2023 de huarte133745.

**Autor:** Julen Huarte

**Asignatura:** Verificación y Validación del Software

**Correo electrónico:** huarte.133745@e.unavarra.es

---

### [Prefijos para los commits](https://midu.dev/buenas-practicas-escribir-commits-git/)

| Prefijo                 | Descripción                                                                     |
|-------------------------|---------------------------------------------------------------------------------|
| **Corrección** 	        | Arreglo de errores del código.                                                  |
| **Configuración**    		 | Configuración de herramientas para el proyecto.                                 |
| **CI-CD**	              | Operaciones sobre la integración continua (CI-CD).                              |
| **Documentación**		     | Cambios en la documentación del proyecto.                                       |
| **Refactorización**	    | Refactorización del código, tanto del código de producción como del de testing. |
| **Estilo**	             | Cambios de formato, tabulaciones, espacios o puntos y coma, etc.                |
| **Test**	               | Adición de tests o refactorización de uno existente.                            |
| **Implementación**	     | Implementación de código de producción.                                         |

---

## Calculador de factores primos de un número - Prime Factors Calculator

Queremos crear un programa que calcule los factores primos de un número que nos provee un servicio externo.

Los factores primos de un número entero son los números primos divisores exactos de ese número entero.

Para solucionar el problema tendremos que:

1. Crear una interfaz llamada NumberProvider que tenga un método getNumber(): int que nos provea de un número.
2. Implementar una clase PrimeFactorsCalculator que tenga un método calculate(): array.
Este método llamará a NumberProvider:getNumber() recibiendo un número y devolverá el listado de factores primos del número que provea el NumberProvider. Es decir:
- getNumber() genera 1 -> calculate() devuelve []
- getNumber() genera 2 -> calculate() devuelve [2]
- getNumber() genera 3 -> calculate() devuelve [3]
- getNumber() genera 4 -> calculate() devuelve [2,2]
- getNumber() genera 5 -> calculate() devuelve [5]
- getNumber() genera 6 -> calculate() devuelve [2,3]
- ...

Dejad de lado casos extremos como números negativos, números con decimales, números muy grandes, etc.

Crear la solución con una buena cobertura de tests, código limpio, orden y subidlo a vuestro repositorio.