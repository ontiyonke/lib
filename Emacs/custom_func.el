;; removes all timing in .srt file
;; usage --> just multiply it by <C-u 1100>

(fset 'srt-remove-timing-data
   (lambda (&optional arg) "Keyboard macro." (interactive "p") (kmacro-exec-ring-item (quote ("

 OBOB" 0 "%d")) arg)))
