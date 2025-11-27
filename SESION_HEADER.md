# Funcionalidad de Sesión en el Header

## Descripción
Se ha implementado una funcionalidad que muestra información de sesión en el header del sitio web cuando un usuario (administrador o cliente) ha iniciado sesión.

## Características Implementadas

### 1. Información de Sesión Visible
- **Saludo personalizado**: Muestra "Hola, [Nombre del Usuario]" con un ícono de usuario
- **Botón Panel**: Redirige al panel correspondiente según el rol del usuario
- **Botón Salir**: Permite cerrar sesión

### 2. Redirección Inteligente
- **Administradores**: Son redirigidos a `/admin/dashboard`
- **Clientes**: Son redirigidos a `/cliente/dashboard`

### 3. Diseño Responsivo
- **Desktop**: Los elementos se muestran en línea horizontal
- **Mobile**: Los elementos se adaptan al menú móvil

## Archivos Modificados

### 1. BaseController.php
- Agregado método `setSessionData()` para obtener información de sesión
- Agregado método `renderView()` para incluir datos de sesión en todas las vistas
- Los datos de sesión están disponibles globalmente para todas las vistas

### 2. header.php (Layout)
- Agregada lógica condicional para mostrar información de sesión
- Incluidos íconos de Font Awesome
- Agregados estilos CSS personalizados para mejorar la apariencia

### 3. Controladores Actualizados
- `Home.php`
- `Productos.php`
- `Contacto.php`
- `SobreNosotros.php`
- `PruebaGratis.php`

Todos ahora usan el método `renderView()` del BaseController.

## Variables Disponibles en las Vistas

Todas las vistas ahora tienen acceso a estas variables:
- `$isLoggedIn` (boolean): Indica si el usuario está logueado
- `$userName` (string): Nombre del usuario logueado
- `$userRole` (string): Rol del usuario ('administrador' o 'cliente')
- `$panelUrl` (string): URL del panel correspondiente al rol

## Estilos CSS

Se agregaron estilos personalizados para:
- `.user-info`: Contenedor de información del usuario
- `.btn-panel`: Botón del panel
- `.btn-logout`: Botón de cerrar sesión
- Responsive design para dispositivos móviles

## Rutas Utilizadas

- `/logout`: Para cerrar sesión
- `/admin/dashboard`: Panel de administrador
- `/cliente/dashboard`: Panel de cliente

## Cómo Funciona

1. Cuando un usuario inicia sesión, la información se guarda en la sesión de CodeIgniter
2. El BaseController automáticamente obtiene esta información en cada request
3. Los datos se pasan a todas las vistas a través del método `renderView()`
4. El header verifica si `$isLoggedIn` es true y muestra la interfaz correspondiente
5. Los botones redirigen a las URLs apropiadas según el rol del usuario

## Seguridad

- Los datos del usuario se obtienen directamente de la base de datos en cada request
- Se verifica que el usuario exista y esté activo
- Se usa `esc()` para prevenir XSS en la salida del nombre de usuario
- Las rutas del panel están protegidas por filtros de autenticación