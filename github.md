Lägger till lite text..
Ännu mer text...
dsf 
sd f
s
dfs
df

OK, såhär: Om jag gör tre commits (numrerade test1…3) så hittar jag två sätt att göra det här:

1) reverta dem en i taget. Så högerklick på test3, revert commit, sedan test2, sedan test1.
2) En märklig workaround med Git reset…
,I går 19:00,
Workarounden är ointuitiv men ganska lätt. Så om min githistorik ser ut såhär:
,I går 19:00,
￼
,I går 19:00,
Så högerklickar jag på "Initial commit" och väljer "Reset current branch to commit" och väljer HARD.
,I går 19:01,
￼
,I går 19:01,
Sedan expanderar jag "Changes to pull from origin" och högerklickar på den NYASTE committen. Så "New commit" i det här fallet.
￼
,I går 19:02,
Och gör "Reset current branch to commit" och väljer SOFT.
,I går 19:03,
￼
Karim Ryde
,
I går 19:03
,
mm ok
,I går 19:03,
￼
Mikael Bergström
,
I går 19:04
,
Så först en hard till den man vill till, och sen en soft på den senaste. Då bör man få (jag fick iaf) ett läge där de ändringar man ville göra ogjorda ligger redo att committas i en helt ny commit, så att säga. Så gör man den, och så är allt frid och fröjd.
,I går 19:04,
￼
Karim Ryde
,
I går 19:05
,
Jag testade gitlens igår. Fann tips om att åtetställa specifik commit från Files-panelen. 
Men historiken blev rätt så konstig på github.
,I går 19:05,
