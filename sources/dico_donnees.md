# dictionnaire de donnée

course
teacher
student

## relations

1 teacher => N student
1 student => N teacher

1 course => N teacher
1 teacher => 1 course

1 teacher => 1 course
1 course => N teacher

1 utilisateur => N review => N course

1 utilisateur => 1 rôle

## entite

Rôle User => teacher / teacher / Admin

--Class
title
duration
description
course
teacher
student
difficulties
success
diplomas
picture

--Teacher
| firstname | - | - |
| lastname | - | - |
| course |

--Student
| firstname | - | - |
| lastname | - | - |
| course | - | - |
| average | - | - |

--User
| firstname | - | - |
| lastname | - | - |
| passeword | - | - |
| email | - | - |
| role | - | - |
| status | - | - |

--Review
| title | - | - |
| description | - | - |
| date | - | - |
| rating | - | - |
