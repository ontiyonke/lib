;; This is a symlink from /usr/local/share/emacs/site-lisp/
;; and contains all my macros

;; removes all timing in .srt file
;; usage --> just multiply it by <C-u 1100>

(fset 'srt-remove-timing-data
   (lambda (&optional arg) "Keyboard macro." (interactive "p") (kmacro-exec-ring-item (quote ("

 OBOB" 0 "%d")) arg)))

;; move the relatively rare words to a special place
(fset 'separate-rare-words
   (lambda (&optional arg) "Keyboard macro." (interactive "p") (kmacro-exec-ring-item (quote ("</p [1;5Aq brare		OD" 0 "%d")) arg)))

;; create a drill item out from ordinary voca-builder item
(fset 'eng-init-drill
   (lambda (&optional arg) "Keyboard macro." (interactive "p") (kmacro-exec-ring-item (quote ("OCOCxgoogle-tra	a	o >woOBOBOAOBOBOB[1;3CdrillOBOBOB[1;3C--->" 0 "%d")) arg)))


;; create a drill item out from rare word

