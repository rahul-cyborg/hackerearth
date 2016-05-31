n = gets.chomp.strip.to_i
str = gets.chomp.strip

def swap(str)
  arr = str.split('')
  len = arr.length
  temp = []
  tmp = []

  (0...len).each do |i|
    if i.odd?
      temp << arr[i]
    else
      tmp << arr[i]
    end
  end

  k = tmp + temp.reverse
  k.join('')
end
k = 0
while k != n
  temp = str
  str = swap(temp)
  k = k + 1
end

puts str